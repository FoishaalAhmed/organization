

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!----1St Slider----->
<div class="container-fluid home-slider">
    <hr style="margin-top:2px ; margin-bottom: 5px; border-top: 1px solid black; ">
    <div class="slideshow-container">
        @foreach ($sliders as $slider)
            
        
        <div class="mySlides ">
            <div class="numbertext"> {{$loop->index + 1}} / {{sizeof($sliders)}}</div>
            <img src="{{asset($slider->photo)}}" style="width:100%">
        </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="" style="text-align: right; margin-top: -50px; margin-right: 50px; ">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <br>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) { slideIndex = 1 }
          if (n < 1) { slideIndex = slides.length }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
        }
    </script>
</div>
<!-----NEWS UPDATE---->
<div class="container-fluid news-update" style="background-color: #75359b; margin-top: 15px; ">
    <div class="container-fluid news-update5">
        <div class="row" style="text-align: center; color: white; ">
            <p style="margin: 0px;margin-top: 10px; font-size: 20px; font-weight: 700;padding: 20px; "> <span class="nzup"
                style="">Bonhishika News Update</span> </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="padding: 10px; width: 100%;" alt="">
                <div class="top-left"><span><i class="fa fa-clock-o"></i></span> &nbsp; <span>02 march 2021</span></div>
                <p style="margin: 0px; padding: 10px; padding-top: 0px; color: white; font-size: 16px; font-weight: 600; ">
                    Lorem ipsum dolor sit amet
                </p>
            </div>
        </div>
    </div>
</div>
<!-----Photo Album---->
<div class="container-fluid" style="background-color:#cbbebe; margin-top: 10px; ">
    <div class="container-fluid" style="width: 75%;">
        <div class="row" style="text-align: center; color: rgb(0, 0, 0); ">
            <p
                style="margin: 0px;padding: 20px; margin-top: 10px;margin-bottom: 10px; font-size: 20px; font-weight: 700; ">
                <span class="nzup">Photo Album</span> 
            </p>
        </div>
        <div class="row">
            <div class="tz-gallery">
                <div class="row">
                    @foreach ($photoGallery as $key => $photos)
                        
                    
                    <div class="col-sm-12 col-xs-12 @if($key == 0) {{'col-md-5'}} @elseif($key == 1 || $key == 5 || $key == 6 || $key == 7 || $key == 8) {{'col-md-4'}} @elseif($key == 2) {{'col-md-3'}} @elseif($key == 3) {{'col-md-6'}} @elseif($key == 4) {{'col-md-2'}} @endif">
                        <a class="lightbox" href="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}">
                        <img src="{{asset($photos->photo)}}" alt="Park">
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-----VIDEO ALBUM---->
<div class="container-fluid" style="background-color: #75359b; margin-top: 10px;padding-bottom: 20px; ">
    <div class="container-fluid" style="width: 75%;">
        <div class="row" style="text-align: center; color: white; ">
            <p
                style="margin: 0px; margin-top: 10px; margin-bottom: 10px; font-size: 20px;padding: 20px; font-weight: 700; ">
                <span class="nzup">Video Album</span> 
            </p>
        </div>
        <div class="row">
            @foreach ($videoGallery as $videos)
                
            
            <div class="col-md-4 col-sm-9 col-xs-12 v-glary">
                <iframe class="v-file" width="100%" src="https://www.youtube.com/embed/<?php echo $videos->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-----About Us---->
@if ($about != null)
    

<div class="container-fluid" style=" margin-top: 10px; ">
    <div class="container-fluid about" style=" background-color: #676464; ">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <img src="{{asset($about->photo)}}"
                    style="width: 70%; border: 2px solid whitesmoke;height: 250px; margin-top: 25px;  " alt="">
            </div>
            <div class="col-md-6" style="text-align: center; color: whitesmoke !important;">
                <div class="row" style="text-align: center; margin: auto;">
                    <h3 style="color: whitesmoke; font-weight: 700;">About Us</h3>
                </div>
                <p style="text-align: justify; color: whitesmoke !important; "> {!!$about->text!!} </p>
            </div>
        </div>
    </div>
</div>

@endif
@endsection

