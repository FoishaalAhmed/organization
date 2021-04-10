@extends('backend.layouts.app')
@section('title', 'Branch')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.branches.index')}}"><i class="fa fa-group"></i> Branch</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Branch</h3>
                        <div class="box-tools pull-right">
                        	<a href="#" class="btn btn-sm bg-green" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> New Branch</a>
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                    	@include('includes.error')
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">Sl.</th>
                                    <th style="width: 25%">District</th>
                                    <th style="width: 55%">Branch</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branches as $key => $branch)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$branch->district}}</td>
                                    <td>{{$branch->name}}</td>
                                    <td>
                                            
                                        
                                    	<a class="btn btn-sm bg-teal" href="#" data-toggle="modal" data-target="#edit-modal" data-id="{{$branch->id}}" data-name="{{$branch->name}}" data-district="{{$branch->district_id}}"><span class="glyphicon glyphicon-edit"></span></a>

                                    	<form action="{{route('admin.branches.destroy',$branch->id)}}" method="post" style="display: none;" id="delete-form-{{ $branch->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                            event.preventDefault();
                                            getElementById('delete-form-{{ $branch->id}}').submit();
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Branch</h4>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.branches.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-2">District</label>
                    <div class="col-sm-9">
                        <select name="district_id" class="form-control select2" style="width: 100%" required>
                            @foreach ($districts as $item)
                                
                            
                            <option value="{{$item->id}}">{{$item->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Name</label>
                    <div class="col-sm-9">
                        <input name="name" placeholder="name" class="form-control" required="" type="text" value="{{ old('name') }}" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12">
                    <center>
                        <button type="reset" class="btn btn-sm bg-red" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-sm bg-teal">Save</button>
                    </center>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
</div>

<div class="modal fade" id="edit-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Branch Update</h4>
        </div>
        <div class="modal-body">
            <form id="edit-form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label col-md-2">District</label>
                    <div class="col-sm-9">
                        <select name="district_id" class="form-control select2" style="width: 100%" required id="district_id">
                            @foreach ($districts as $item)
                                
                            
                            <option value="{{$item->id}}">{{$item->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Name</label>
                    <div class="col-sm-9">
                        <input name="name" id="name" placeholder="name" class="form-control" required="" type="text" value="{{ old('name') }}" autocomplete="off">
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
                <div class="col-md-12">
                    <center>
                        <button type="reset" class="btn btn-sm bg-red" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm bg-teal">Update</button>
                    </center>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
</div>

  <script type="text/javascript">

    $('#edit-modal').on("show.bs.modal", function(event){

        var e             = $(event.relatedTarget);
        var id            = e.data('id');
        var name          = e.data('name');
        var district      = e.data('district');

        var action = '{{URL::to('admin/branches/update')}}';
 
        $("#edit-form").attr('action', action);
        $("#id").val(id);
        $("#name").val(name);
        $("#district_id").val(district);
        $('#district_id').trigger('change');

    });
</script>
@endsection