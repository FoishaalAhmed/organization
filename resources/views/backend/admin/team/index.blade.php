@extends('backend.layouts.app')
@section('title', 'Team List')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('teams.index')}}"><i class="fa fa-group"></i> {{__('Teams')}}</a></li>
            <li class="active">{{__('List')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Team header) -->
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Team List')}}</h3>
                        <div class="box-tools pull-right">
                        	<a href="{{route('teams.create')}}" class="btn btn-sm bg-green"><i class="fa fa-plus"></i> {{__('New Team')}}</a>
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">{{__('Sl.')}}</th>
                                    <th style="width: 35%;">{{__('Name')}}</th>
                                    <th style="width: 25%;">{{__('Position')}}</th>
                                    <th style="width: 10%;">{{__('Priority')}}</th>
                                    <th style="width: 10%;">{{__('Photo')}}</th>
                                    <th style="width: 10%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $key => $team)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->position}}</td>
                                    <td>{{$team->priority}}</td>
                                    
                                    <td>
                                        <img src="{{asset($team->photo)}}" alt="" style="width: 50px; height: 50px;">
                                        
                                    </td>
                                    <td>
                                    	<a class="btn btn-sm bg-blue" href="{{route('teams.edit',[$team->id])}}"><span class="glyphicon glyphicon-edit"></span></a>

                                    	<form action="{{route('teams.destroy',[$team->id])}}" method="post" style="display: none;" id="delete-form-{{ $team->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                            event.preventDefault();
                                            getElementById('delete-form-{{ $team->id}}').submit();
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