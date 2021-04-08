@extends('backend.layouts.app')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('categories.index')}}"><i class="fa fa-group"></i> Category</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Category</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                    	@include('includes.error')
                        @if (isset($category))
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('categories.update', $category->id)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Name')}}</label>
                                                    <input type="text" name="name"  placeholder="{{__('Name')}}" value="{{$category->name}}" required="" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Parent')}}</label>
                                                    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%">
                                                        <option value="0" @if ($category->parent_id == 0) {{'selected'}} @endif >{{__('None')}}</option>
                                                        @foreach ($categories as $item)
                                                            <option value="{{$item->id}}" @if ($category->parent_id == $item->id) {{'selected'}} @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><br/></label>
                                            <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Update')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                           <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('categories.store')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Name')}}</label>
                                                    <input type="text" class="form-control" name="name"  placeholder="{{__('Name')}}" value="{{old('name')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Parent')}}</label>
                                                    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%">
                                                        <option value="0" @if (old('parent_id') == 0) {{'selected'}} @endif >{{__('None')}}</option>
                                                        @foreach ($categories as $item)
                                                            <option value="{{$item->id}}" @if (old('parent_id') == $item->id) {{'selected'}} @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><br/></label>
                                            <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Save')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%">Sl.</th>
                                            <th style="width: 40%">Categories</th>
                                            <th style="width: 40%">Parent</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$category->name}} </td>
                                            <td>
                                                @if ($category->parent_name == null)
                                                    {{'None'}}
                                                @else
                                                    {{$category->parent_name}}
                                                @endif 
                                            </td>
                                            <td>   
                                                
                                                <a class="btn btn-sm bg-teal" href="{{route('categories.edit', $category->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

                                                <form action="{{route('categories.destroy',$category->id)}}" method="post" style="display: none;" id="delete-form-{{ $category->id}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $category->id}}').submit();
                                                    }else{
                                                    event.preventDefault();
                                                    }"><span class="glyphicon glyphicon-trash"></span></a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection