

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Bonnishikha || @yield('title') </title>
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/Bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/Bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/gallery-grid.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/gallery-2.css')}}">
        <!----Font---->
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome-4.7.0/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    </head>
    <body>
        <div class="container-fluid" style="border-top: 2px solid red;" >
            <!---nav---->
            <div class="container-fluid nav-header" style="margin-top: 10px;" >
                <nav class="navbar navbar-inverse" style="border: none; background-color: white;color: black;margin-bottom: 5px;" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2" style="margin-top: 15px;" >
                                <div class="navbar-header">
                                    <button style="color: black;background: #75359b;" type="button" onclick="$('#myNavbar').toggle();" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                    </button>
                                    <a  class="navbar-brand" href="./index.html">
                                    <img src="{{asset('public/frontend/img/dublar-chor-sundarban-bangladesh.jpg')}}" width="100px" height="50px"  alt=""> </a>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse" style="margin-top: 10px;" id="myNavbar">
                                <div class="col-md-8" style="text-align: center;margin: auto;margin-top: 15px;">
                                    <ul class="nav navbar-nav">
                                        <li><a style="color: black;padding: 10px;" class="active" href="./index.html">Home</a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./About.html">About</a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./Events And Programme.html">Events And Progrem </a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./See More News.html"> News </a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./Photo Gallery.html">Photo</a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./Video Gallery .html">Veideo</a></li>
                                        <li><a style="color: black;padding: 10px;" target="_blank" href="./Bloges.html"> Bloges </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="nav navbar-nav navbar-right">
                                        <div class="col-md-12" >
                                            <div class="row riht">
                                                <!-- <div class="dropdown">
                                                    <span style="background-color: #eb1d5d; padding: 5px; color: #f1f1f1; " onclick="$('#db').toggle();"  > MEMBER LOGIN </span>
                                                    <div class="dropdown-content">
                                                        <div class="" id="db"> 
                                                    
                                                            <form action="/action_page.php" method="post" style="padding: 10px;" >
                                                            
                                                                <div class="">
                                                                <label for="uname"><b>Username</b></label>
                                                                <input type="text" placeholder="Enter Username" name="uname" required>
                                                            
                                                                <label for="psw"><b>Password</b></label>
                                                                <input type="password" placeholder="Enter Password" name="psw" required>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                                                    </label>
                                                                <button type="submit">Login</button>
                                                                </div>
                                                            
                                                                <div class="" style="background-color:#f1f1f1">
                                                                <span class="psw">Forgot <a style="text-decoration: none;" href="#">password?</a></span>
                                                                </div>
                                                    
                                                                <button type="submit"> <a style="text-decoration: none;" href="./register.html">Register</a> </button>
                                                            </form>
                                                    
                                                        </div>
                                                    </div>
                                                    </div> -->
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" onclick="$('#dropdownMenuButton').toggle();" style="background-color: #eb1d5d; padding: 2px; color: #f1f1f1;border-radius: 0px; "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    MEMBER LOGIN
                                                    </button>
                                                    <div class="dropdown-menu" id="dropdownMenuButton" aria-labelledby="dropdownMenuButton">
                                                        <form action="/action_page.php" method="post" style="padding: 10px;" >
                                                            <div class="">
                                                                <label for="uname"><b>Username</b></label>
                                                                <input type="text" placeholder="Enter Username" name="uname" required>
                                                                <label for="psw"><b>Password</b></label>
                                                                <input type="password" placeholder="Enter Password" name="psw" required>
                                                                <br>
                                                                <label>
                                                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                                                </label>
                                                                <br>
                                                                <button type="submit">Login</button>
                                                            </div>
                                                            <br>
                                                            <div class="" style="background-color:#f1f1f1">
                                                                <span class="psw">Forgot <a style="text-decoration: none;font-size:15px" href="#">password?</a></span>
                                                            </div>
                                                            <button type="submit"> <a style="text-decoration: none;font-size:15px; margin-top: 5px;" href="./register.html">Register</a> </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <form action="/action_page.php" method="post" style="padding: 10px;padding-left: 0px;" >
                                                        <div class="">
                                                            <input type="search" placeholder="search"  name="search" >
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="bbb">
                                                    <a href="#" style="text-decoration: none;background-color: #eb1d5d; padding: 5px; font-size: 14px; color: #f1f1f1; border: none;" >DONATE NOW </a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <hr style="margin-bottom: 5px; margin-top: 5px;" >
            <!----Main content-->
            @section('content')
                
            @show
            <!----Main content-->
            <!-----Footer---->
            <div class="container-fluid" style="background-color: blueviolet; margin-top: 10px; " >
                <div class="container-fluid" style="width: 75%;" >
                    <div class="row" style="margin-top: 30px;" >
                        <div class="col-md-4 footer1">
                            <div class="footer-hade1">
                                <h2 style="color: whitesmoke;" >Contact Us</h2>
                            </div>
                            <p style="margin: 0px; color: white; font-size:18px " >Mohammadpur , Dhaka .</p>
                            <p style="margin: 0px; color: white; font-size:18px " >Phone :</p>
                            <p style="margin: 0px; color: white; font-size:18px " >+88 01919 000 111</p>
                            <br>
                            <p style="margin: 0px; color: white; font-size:18px " >E-mail :</p>
                            <p style="margin: 0px; color: white; font-size:18px " >bonhishika@gmail.com</p>
                        </div>
                        <div class="col-md-4 footer1">
                            <div class="footer-hade1">
                                <h2 style="color: whitesmoke;" >Club News</h2>
                            </div>
                            <p style="margin: 0px; color: white; font-size:18px " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officiis accusantium ducimus </p>
                            <br>
                            <button class="btn btn-denger" style="background-color: red; color: whitesmoke;" > Read Blog </button>
                        </div>
                        <div class="col-md-4 footer3">
                            <div class="footer-hade1">
                                <h2 style="color: whitesmoke;" >Contact With Us</h2>
                            </div>
                            <p style="margin: 0px; color: white; font-size:18px " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officiis accusantium ducimus </p>
                            <br>
                            <a href="#"> <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 30px;"></i></a>
                            <a href="#"> <i class="fa fa-instagram" aria-hidden="true" style="font-size: 30px;padding-left: 10px;color: rgb(219, 62, 62);"></i></a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true" style="font-size: 30px;padding-left: 10px;"></i></a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 30px;padding-left: 10px;color: rgb(168, 45, 45);"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <h2 style="color: whitesmoke;" >@bonhishika2021</h2>
                        <p style="color: whitesmoke;" >Developd By <a href="#">ICT Bangla</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="{{asset('public/frontend/js/gallery.js')}}"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
        <script src="{{asset('public/frontend/css/Bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('public/frontend/css/Bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
        <script src="{{asset('public/frontend/js/jqu.js')}}"></script>
    </body>
</html>

