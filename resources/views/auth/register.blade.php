@extends('layouts.app')
@section('title', 'Member Registration')

@section('content')
    <!----Main content-->
    <div class="container register" style="text-align: center; margin: auto;">
      <div class="row">
        <h2>Fill Up this form to be a member</h2>
        @include('includes.error')
        @if (session()->has('message'))
            
        
        <div class="alert alert-success alert-dismissible" id="success-alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{session('message')}}</strong>
        </div>
        @endif

      </div>
      <form method="post" action="{{route('member.register')}}">
        @csrf
      <div class="row" style="margin: auto; text-align: center; ">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-9 col-xs-12" style="margin-bottom: 10px;text-align: left;padding-left: 0px;">
          <br>
          <input type="text" class="reg" placeholder="First-Name" id="frist-name"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="first_name">

          <input type="text" class="reg" placeholder="Last-Name" id="last-name"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="last_name">

          <br>
          <input type="text" class="reg" placeholder="Email" id="email"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="email">

          <input type="text" class="reg" placeholder="Mobile" id="mobile"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="phone">

          <br>
          <input type="text" class="reg" placeholder="School/College/University" id="educational"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="education">

          <input type="text" class="reg" placeholder="Organization Position" id="organization"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; " name="position">

          <br>
          <input type="text" class="reg" placeholder="Address" id="confirm-password"
            style="padding: 7px;margin-top: 20px; height:50px;  border: 1px solid black; font-size: 18px;color: black;text-align: left; width:91%" name="address">
          <br>
          <br>
          <button class="btn btn-btn" type="submit" style="background-color: #eb1d5d;"> PROCEED </button>
        </div>
      </div>
      </form>
    </div>
    <!----Main content-->
@endsection

@section('footer')

<script>
    $(document).ready(function() {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
        });
    });
</script>
    
@endsection


