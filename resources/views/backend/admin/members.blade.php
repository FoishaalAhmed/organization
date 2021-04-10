@extends('backend.layouts.app')
@section('title', 'Member Request')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Member Request')}}</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">{{__('Sl.')}}</th>
                                    <th style="width: 15%;">{{__('Name')}}</th>
                                    <th style="width: 15%;">{{__('Email')}}</th>
                                    <th style="width: 10%;">{{__('Phone')}}</th>
                                    <th style="width: 15%;">{{__('education')}}</th>
                                    <th style="width: 10%;">{{__('position')}}</th>
                                    <th style="width: 30%;">{{__('address')}}</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($members as $key => $member)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$member->first_name.' '.$member->last_name}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->phone}}</td>
                                    <td>{{$member->education}}</td>
                                    <td>{{$member->position}}</td>
                                    <td>{{$member->address}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection