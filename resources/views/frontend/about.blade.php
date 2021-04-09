

@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<!----Main content-->
<div class="container-fluid about-responsive" style="">
    <div class="row about-responsi">
        @foreach ($pages as $page)
        <div class="col-md-4 col-sm-9 col-xs-12">
            <div class="card card-1 ">
                <div class="card-header">
                    <img src="{{asset($page->photo)}}" alt="">
                </div>
                <div class="card-footer" style="text-align: justify;">
                    <h1>{{$page->name}}</h1>
                    {!!$page->text!!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!----Main content-->
@endsection

