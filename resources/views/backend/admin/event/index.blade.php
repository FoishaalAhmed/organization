@extends('backend.layouts.app')
@section('title', 'Event List')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.events.index')}}"><i class="fa fa-group"></i> {{__('Events')}}</a></li>
            <li class="active">{{__('List')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Event header) -->
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Event List')}}</h3>
                        <div class="box-tools pull-right">
                        	<a href="{{route('admin.events.create')}}" class="btn btn-sm bg-red"><i class="fa fa-plus"></i> {{__('New Event')}}</a>
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">{{__('Sl.')}}</th>
                                    <th style="width: 15%;">{{__('Title')}}</th>
                                    <th style="width: 20%;">{{__('Slug')}}</th>
                                    <th style="width: 35%;">{{__('Text')}}</th>
                                    <th style="width: 10%;">{{__('Photo')}}</th>
                                    <th style="width: 15%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $key => $event)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->slug}}</td>
                                    <td>{!! Illuminate\Support\Str::limit($event->details, 100) !!}</td>
                                    
                                    <td>
                                        <img src="{{asset($event->photo)}}" alt="" style="width: 50px; height: 50px;">
                                        
                                    </td>
                                    <td>
                                    	<a class="btn btn-sm bg-green" href="{{route('admin.events.edit',[$event->id])}}"><span class="glyphicon glyphicon-edit"></span></a>

                                    	<form action="{{route('admin.events.destroy',[$event->id])}}" method="post" style="display: none;" id="delete-form-{{ $event->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                            event.preventDefault();
                                            getElementById('delete-form-{{ $event->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
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