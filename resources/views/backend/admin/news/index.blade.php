@extends('backend.layouts.app')
@section('title', 'News List')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.news.index')}}"><i class="fa fa-group"></i> {{__('News')}}</a></li>
            <li class="active">{{__('List')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (News header) -->
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('News List')}}</h3>
                        <div class="box-tools pull-right">
                        	<a href="{{route('admin.news.create')}}" class="btn btn-sm bg-red"><i class="fa fa-plus"></i> {{__('New News')}}</a>
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">{{__('Sl.')}}</th>
                                    <th style="width: 15%;">{{__('Date')}}</th>
                                    <th style="width: 25%;">{{__('Title')}}</th>
                                    <th style="width: 35%;">{{__('Detail')}}</th>
                                    <th style="width: 10%;">{{__('Photo')}}</th>
                                    <th style="width: 10%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $key => $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{date('d M, Y', strtotime($item->date))}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{!! Illuminate\Support\Str::limit($item->detail, 100) !!}</td>
                                    
                                    <td>
                                        <img src="{{asset($item->photo)}}" alt="" style="width: 50px; height: 50px;">
                                        
                                    </td>
                                    <td>
                                    	<a class="btn btn-sm bg-green" href="{{route('admin.news.edit',[$item->id])}}"><span class="glyphicon glyphicon-edit"></span></a>

                                    	<form action="{{route('admin.news.destroy',[$item->id])}}" method="post" style="display: none;" id="delete-form-{{ $item->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                            event.preventDefault();
                                            getElementById('delete-form-{{ $item->id}}').submit();
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