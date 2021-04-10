@extends('layouts.app')

@section('title', "{$page->name}")
@section('content')

    <!----Main content-->
    <div class="row news-dtl" style="text-align: center; margin: auto; ">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 style="text-align: left;">{{$page->title}}</h1>
        <img src="{{asset($page->photo)}}" style="width: 100%;" alt="">
        
        <div style="text-align: justify;padding-left: 10px;font-size: 18px;margin-right: 10px;"> {!! $page->text !!}</div>
      </div>
    </div>
    <!----Main content-->
    
@endsection