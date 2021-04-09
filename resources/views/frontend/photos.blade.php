@extends('layouts.app')

@section('title', 'Photo Gallery')
@section('content')
    <!----Main content-->
    <div class="container-fluid events2" style="">
      <div class="row photo-animation" style="text-align: center; margin: auto;">
        <h1 class="nzup2 p-hade">Photo Gallery</h1>
      </div>
      <div class="row">
        <div class="tz-gallery photo-animation2">
          <div class="row">
              @foreach ($photos as $item)
                    <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset($item->photo)}}">
                        <img style="width: 100%; height: 205px; border: 2px solid green; border-radius: 50px;" src="{{asset($item->photo)}}" alt="Park">
                    </a>
                    </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="row" style="text-align: center; margin: auto;margin-top: 10px;">
        <div class="col-md-8"></div>
          <div class="col-md-4" style="float: right; text-align: right;">{{$photos->links()}}</div>
      </div>
    </div>
    <!----Main content-->
@endsection