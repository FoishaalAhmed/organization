@extends('backend.layouts.app')
@section('title', 'Query List')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('queries.index')}}"><i class="fa fa-group"></i> {{__('Queries')}}</a></li>
            <li class="active">{{__('List')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Query header) -->
                <div class="box box-6a8d9d box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Query List')}}</h3>
                        <div class="box-tools pull-right">
                        	{{-- <a href="{{route('queries.create')}}" class="btn btn-sm bg-purple"><i class="fa fa-plus"></i> {{__('New Query')}}</a> --}}
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
                                    <th style="width: 15%;">{{__('Phone')}}</th>
                                    <th style="width: 15%;">{{__('Subject')}}</th>
                                    <th style="width: 30%;">{{__('Message')}}</th>
                                    <th style="width: 5%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $key => $query)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$query->name}}</td>
                                    <td>{{$query->email}}</td>
                                    <td>{{$query->phone}}</td>
                                    <td>{{$query->subject}}</td>
                                    <td>{{$query->message}}</td>
                                    <td>

                                    	<form action="{{route('queries.destroy',[$query->id])}}" method="post" style="display: none;" id="delete-form-{{ $query->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                            event.preventDefault();
                                            getElementById('delete-form-{{ $query->id}}').submit();
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