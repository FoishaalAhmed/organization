

@extends('backend.layouts.app')
@section('title', 'News Update')
@section('head')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.news.index')}}"><i class="fa fa-group"></i> {{__('Pages')}}</a></li>
            <li class="active">{{__('News Update')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (News header) -->
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('News Update')}}</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('admin.news.index')}}" class="btn btn-sm bg-red"><i class="fa fa-list"></i> {{__('News List')}}</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br>
                        @include('includes.error')
                        <form action="{{route('admin.news.update', $news->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-9">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Date')}}</label>
                                            <input name="date" placeholder="{{__('Date')}}" class="form-control" type="text" value="{{ $news->date }}" autocomplete="off" id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Title')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Title')}}" name="title" value="{{$news->title}}" required="" autocomplete="off" id="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Slug')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Slug')}}" name="slug" value="{{$news->slug}}" required="" autocomplete="off" id="slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('branch')}}</label>
                                            <select name="branch_id" id="branch_id" class="form-control select2" style="width: 100%;" required>
                                                @foreach ($branches as $item)
                                                    <option value="{{$item->id}}"
                                                        @if ($item->id == $news->branch_id) {{'selected'}} @endif
                                                    >{{$item->name}} ({{$item->district}}) </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{__('Detail')}}</label>
                                        <textarea name="detail" class="form-control textarea" >{{$news->detail}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box box-success box-solid">
                                    <div class="box-header with-border">

                                        <h3 class="box-title"> {{__('News Photo')}} </h3>

                                    </div>
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="{{asset($news->photo)}}" alt="News Photo" id="news-photo">
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
                                    <button type="submit" class="btn btn-sm bg-green">{{__('Update')}}</button>
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
    <script src="{{asset('public/backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

    <script>
        function readPicture(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#news-photo')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                };
        
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        });

        $(function () {

            $('#date').datepicker({
                autoclose:   true,
                changeYear:  true,
                changeMonth: true,
                dateFormat:  "dd-mm-yy",
                yearRange:   "-10:+10"
            });

        
        });

        $("#title").keyup(function(){
        
            var title = $("#title").val();

            var slug = (title.replace(/[^a-zA-Z0-9]+/g, '-')).toLowerCase();
            $("#slug").val(slug);

        });
    </script>
@endsection

