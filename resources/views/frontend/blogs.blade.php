@extends('layouts.app')

@section('title', 'Blogs')
@section('content')
    <!----Main content-->
    <div class="container-fluid bloges-responsive" style="">
      <div class="row bloges-dtl-pic">
        <div class="col-md-12 col-sm-9 col-xs-12">
          <div class="card card-10 ">
            <div class="card-header">
              <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row bloges-dtl" style="text-align: center;
                    margin: auto;">
        <div class="col-md-12" style="margin-bottom: 10px;text-align: left;padding-left: 0px;">
          <select name="catagory" id="catagory" style="padding: 8px; ">
            <option value="">Select category</option>
            @foreach ($categories as $category) 
           
                <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
          </select>
        </div>
        <br>
        @foreach ($blogs as $blog)
            
        
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-md-3" style="text-align: left;">
            <img src="{{asset($blog->photo)}}" width="100%" height="180px" alt="">
          </div>
          <div class="col-md-9" style="background-color: rgb(229, 226, 226);height: 180px; text-align: left; overflow-y: auto; text-align: justify;">
            <h2>{{$blog->title}}</h2>
            {!! Illuminate\Support\Str::limit($blog->text, 500) !!}

            <a href="{{route('blog.detail', [$blog->id, strtolower(str_replace(' ', '-', $blog->title))])}}"> read more</a>
          </div>
        </div>

        @endforeach
      </div>
      <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4" style="float: right; text-align: right;">{{$blogs->links()}}</div>
      </div>
    </div>
    <!----Main content-->
@endsection