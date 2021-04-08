

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!----1St Slider----->
<div class="container-fluid home-slider">
    <hr style="margin-top:2px ; margin-bottom: 5px; border-top: 1px solid black; ">
    <div class="slideshow-container">
        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="{{asset('public/frontend/img/Mask Group 1.png')}}" style="width:100%">
        </div>
        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" style="width:100%">
        </div>
        <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style="width:100%">
        </div>
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
        <!-- <div class="row" >
            <div class="col-md-4 col-sm-9 col-xs-12 p-glarry">
              
              <div class="row" style="margin: 0px;" >
                <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" style=" height: 200px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" style=" height: 500px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" style=" height: 250px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
              </div>
              
            </div>
            
            
            <div class="col-md-4 col-sm-9  col-xs-12 p-glarry2 " >
              
              <div class="row responsive-img2" >
                <img src="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}" style=" height: 300px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}" style=" height: 450px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}" style=" height: 200px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
              </div>
              
            </div>
            
            <div class="col-md-4 col-sm-9  col-xs-12 p-glarry3 " >
              
              <div class="row responsive-img3" style="margin: 0px;" >
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style=" height: 450px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style=" height: 200px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
                <img src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" style=" height: 300px; margin-top: 10px; border: 2px solid whitesmoke; " alt="">
              </div>
              
            </div>
            </div> -->
        <div class="row">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-5">
                        <a class="lightbox" href="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}">
                        <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-4">
                        <a class="lightbox" href="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}" alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox" href="{{asset('public/frontend/img/Mask Group 1.png')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/Mask Group 1.png')}}" alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <a class="lightbox" href="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" alt="Coast">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-2">
                        <a class="lightbox" href="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}" alt="Rails">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-4">
                        <a class="lightbox" href="{{asset('public/frontend/img/sundarbon.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/sundarbon.jpg')}}" alt="Traffic">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-4">
                        <a class="lightbox" href="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" alt="Rocks">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-4">
                        <a class="lightbox" href="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/longest-sea-beach-in.jpg')}}" alt="Benches">
                        </a>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-4">
                        <a class="lightbox" href="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}">
                        <img style="width: 100%;height: 250px;" src="{{asset('public/frontend/img/Nel Girre BANDARBAN.jpg')}}" alt="Sky">
                        </a>
                    </div>
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
            <div class="col-md-4 col-sm-9 col-xs-12 v-glary">
                <iframe class="v-file" width="100%" src="https://www.youtube.com/embed/oJuPATeVhiw?list=RD3qg5t1q6fMc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-sm-9 col-xs-12 v-glary">
                <iframe class="v-file" width="100%" src="https://www.youtube.com/embed/oJuPATeVhiw?list=RD3qg5t1q6fMc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-sm-9 col-xs-12 v-glary">
                <iframe class="v-file" width="100%" src="https://www.youtube.com/embed/oJuPATeVhiw?list=RD3qg5t1q6fMc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-----About Us---->
<div class="container-fluid" style=" margin-top: 10px; ">
    <div class="container-fluid about" style=" background-color: #676464; ">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <img src="{{asset('public/frontend/img/sundarbon.jpg')}}"
                    style="width: 70%; border: 2px solid whitesmoke;height: 250px; margin-top: 25px;  " alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <div class="row" style="text-align: center; margin: auto;">
                    <h3 style="color: whitesmoke; font-weight: 700;">About Us</h3>
                </div>
                <p style="text-align: justify; color: whitesmoke; ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rem quos eaque dolorum aliquid laborum amet eum, atque architecto necessitatibus aliquam nam! Sunt, ipsum
                    perspiciatis. Ducimus quos sequi perferendis vitae tenetur error eligendi debitis facere consequatur hic!
                    Nam dolorum, officiis vero ipsam consectetur recusandae perferendis eveniet porro. Minima dolorum
                    architecto repellendus!
                </p>
                <br>
                <p style="text-align: justify; color: whitesmoke; ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rem quos eaque dolorum aliquid laborum amet eum, atque architecto necessitatibus aliquam nam! Sunt, ipsum
                    perspiciatis. Ducimus quos sequi perferendis vitae tenetur error eligendi debitis facere consequatur hic!
                    Nam dolorum, officiis vero ipsam consectetur recusandae perferendis eveniet porro. Minima dolorum
                    architecto repellendus!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

