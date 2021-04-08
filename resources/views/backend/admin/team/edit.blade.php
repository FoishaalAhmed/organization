

@extends('backend.layouts.app')
@section('title', 'Team Update')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('teams.index')}}"><i class="fa fa-group"></i> {{__('Teams')}}</a></li>
            <li class="active">{{__('Team Update')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Team header) -->
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Team Update')}}</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('teams.index')}}" class="btn btn-sm bg-green"><i class="fa fa-list"></i> {{__('Team List')}}</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br>
                        @include('includes.error')
                        <form action="{{route('teams.update', $team->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-md-9">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Name')}}</label>
                                            <input name="name" placeholder="{{__('Name')}}" class="form-control" required="" type="text" value="{{ $team->name }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Position')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Position')}}" name="position" value="{{$team->position}}" required="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Facebook')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Facebook')}}" name="facebook" value="{{$team->facebook}}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Twitter')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Twitter')}}" name="twitter" value="{{$team->twitter}}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Linkedin')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Linkedin')}}" name="linkedin" value="{{$team->linkedin}}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Instagram')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Instagram')}}" name="instagram" value="{{$team->instagram}}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Priority')}}</label>
                                            <input name="priority" placeholder="{{__('Priority')}}" class="form-control" type="numeric" min="1" value="{{ $team->priority }}" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box box-primary box-solid">
                                    <div class="box-header with-border">

                                        <h3 class="box-title"> {{__('Team Photo')}} </h3>

                                    </div>
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="{{asset($team->photo)}}" alt="Team profile picture" id="team-photo">
                                        <input type="file" name="photo" onchange="readPicture(this)">
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{__('Update')}}</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        function readPicture(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#team-photo')
                .attr('src', e.target.result)
                .width(200)
                .height(200);
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
@endsection

