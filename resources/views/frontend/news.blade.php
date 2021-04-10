

@extends('layouts.app')
@section('title', 'News')
@section('content')
<!-----Main Containt---->
<div class="container-fluid news-update" style="background-color: blueviolet; margin-top: 15px; ">
    <div class="container-fluid news-update5">
        <div class="row">
            @foreach ($news as $item)
            
                <div class="col-md-3">
                    <a href="{{route('news.detail', $item->slug)}}">
                    <img src="{{asset($item->photo)}}" style="padding: 10px; width: 100%;" alt="">
                    <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>{{date('d M, Y', strtotime($item->date))}}</span></div>
                    <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                        {{$item->title}}
                    </p>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4" style="float: right; text-align: right;">{{$news->links()}}</div>
</div>
<!-----Main Containt-->
@endsection

