@extends('layouts.app')

@section('title', 'Blog Detail')
@section('content')

    <!----Main content-->
    <div class="row news-dtl" style="text-align: center; margin: auto; ">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <h1 style="text-align: left;">{{$blog->title}}</h1>
        <img src="{{asset($blog->photo)}}" style="width: 100%;" alt="">
        <p style="text-align: left;"><small>{{date('d M, Y', strtotime($blog->date))}}</small></p>
        <div style="text-align: justify;padding-left: 10px;font-size: 18px;margin-right: 10px;"> {!! $blog->text !!}</div>
        <div class="col-md-6" style="padding: 0px;">
          <div class="card" style="background: none; text-align: left; ">
            <h3>শেয়ার করুন</h3>
            <div class="">
              <a href="#"> <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 30px;"></i></a>
              <a href="#"> <i class="fa fa-instagram" aria-hidden="true"
                  style="font-size: 30px;padding-left: 10px;color: rgb(219, 62, 62);"></i></a>
              <a href="#"> <i class="fa fa-twitter" aria-hidden="true"
                  style="font-size: 30px;padding-left: 10px;"></i></a>
              <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"
                  style="font-size: 30px;padding-left: 10px;color: rgb(168, 45, 45);"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-9 col-xs-12 ">
        <div class="">
            @if ($video!= null)
            
                <h2>YouTube</h2>
                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/<?php echo $video->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
        </div>
        <div class="">
          <h2>আরো পড়ুন</h2>
          @foreach ($relatedBlog as $blog)
              
          
          <div class="" style="border-bottom: 2px solid red;margin-bottom: 5px; ">
            <a href="{{route('blog.detail', [$blog->id, strtolower(str_replace(' ', '-', $blog->title))])}}">
            <img src="{{asset($blog->photo)}}" style="width: 100%; height: 220px;" alt="">
            <p style="text-align: left;margin-top: 5px; margin-bottom: 5px;">{{$blog->title}}</p>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!----Main content-->
    
@endsection