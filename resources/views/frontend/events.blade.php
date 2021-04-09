@extends('layouts.app')

@section('title', 'Events & Program')
@section('content')
    <!----Main content-->
    <div class="container-fluid events" style="">
      <div class="row events-photo">
          
        <div class="col-md-12 col-sm-9 col-xs-12">
          <div class="card card-10 ">
            <div class="card-header">
              <img src="{{asset($events[0]->photo)}}" alt="">
              <div class="centered">Events & Program</div>
            </div>
            <div class="card-footer" style="text-align: justify;">
              <h1>{{$events[0]->title}}</h1>
              {!!$events[0]->details!!}
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        @foreach ($events as $key => $event)
            @if ($key > 0)
                
            
            <div class="col-md-4 col-sm-9 col-xs-12">
                <div class="card card-2">
                    <div class="card-header">
                    <img src="{{asset($event->photo)}}" alt="">
                    </div>
                    <div class="card-footer" style="text-align: justify;">
                    <h1>{{$event->title}}</h1>{!!$event->details!!}
                    
                    </div>
                </div>
            </div>

            @endif
        @endforeach
        
      </div>
      <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4" style="float: right; text-align: right;">{{$events->links()}}</div>
      </div>
    </div>
    <!----Main content-->
@endsection