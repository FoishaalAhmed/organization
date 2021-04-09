@extends('layouts.app')

@section('title', 'Video Gallery')
@section('content')
    <!----Main content-->
    <div class="container-fluid video-responsive" style="">
      <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-12 col-sm-9 col-xs-12 animi-vdo card-p">
          <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $videos[0]->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row video-gg animi-vdo2">
            @foreach ($videos as $key => $item)
                
                @if ($key > 0)
                    
                
                
                    <div class="col-md-4 col-sm-9 col-xs-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $item->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif
            @endforeach
      </div>
      <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4" style="float: right; text-align: right;">{{$videos->links()}}</div>
      </div>
    </div>
    <!----Main content-->
@endsection