@extends('backend.layouts.app')
@section('title', 'FAQ')
@section('head')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('faqs.index')}}"><i class="fa fa-group"></i> FAQ</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-purple box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">FAQ</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                    	@include('includes.error')
                        @if (isset($faq))
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <form action="{{route('faqs.update', $faq->id)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="">{{__('Question')}}</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="title"  placeholder="{{__('Question')}}" value="{{$faq->title}}" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="">{{__('Answer')}}</label>
                                            <div class="col-md-8">
                                                <textarea name="text" class="form-control textarea" >{{$faq->text}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <center>
                                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                                <button type="submit" class="btn btn-sm bg-purple">{{__('Update')}}</button>

                                            </center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                           <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <form action="{{route('faqs.store')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="">{{__('Question')}}</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="title"  placeholder="{{__('Question')}}" value="{{old('title')}}" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="">{{__('Answer')}}</label>
                                            <div class="col-md-8">
                                                <textarea name="text" class="form-control textarea" >{{old('text')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <center>
                                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                                <button type="submit" class="btn btn-sm bg-purple">{{__('Save')}}</button>

                                            </center>
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
                                            <th style="width: 5%">Sl.</th>
                                            <th style="width: 35%">Question</th>
                                            <th style="width: 50%">Answer</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faqs as $key => $faq)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$faq->title}}</td>
                                            <td>{!! Illuminate\Support\Str::limit($faq->text, 100) !!}</td>
                                            <td>   
                                                
                                                <a class="btn btn-sm bg-purple" href="{{route('faqs.edit', $faq->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

                                                <form action="{{route('faqs.destroy',$faq->id)}}" method="post" style="display: none;" id="delete-form-{{ $faq->id}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $faq->id}}').submit();
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

@section('footer')
    <script src="{{asset('public/backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

    <script>

        $(function () {
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        });
    </script>
@endsection