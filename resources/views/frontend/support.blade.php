@extends('layouts.app')

@section('title', 'Support')
@section('content')
    <!----Main content-->
    <div class="container donate" style="text-align: center; margin: auto;">
      <div class="row">
        <h2>Support Women's Empowerment</h2>
        <span id="form_output"></span>
      </div>
      <form action="" method="post" id="support-form">
          @csrf
      
          <div class="row" style="margin: auto; text-align: center; ">

            <div class="col-md-2"></div>
            <div class="col-md-8" style="margin-bottom: 10px;text-align: left;padding-left: 0px;">
              <select class="wtd" name="currency" id="catagory" style="padding: 8px; height:50px;margin-bottom: 10px; ">
                <option value="TK">TK</option>
                <option value="USD">USD</option>
                <option value="Pound">Pound</option>
                <option value="CAD">CAD</option>
                <option value="Euro">Euro</option>
              </select>
              <input class="wtd" type="text" placeholder="500"
                style="padding: 7px;margin-bottom: 10px; height:50px; background-color:#eb1d5d; border: none; font-size: 18px;color: white;text-align: center; " name="amount" required="">
              {{-- <input class="wtd" type="text" placeholder="One-Time" style="padding: 7px;margin-bottom: 10px; height:50px; background-color:#eb1d5d; border: none; font-size: 18px;color: white;text-align: center; "> --}}
              <br>
              <input class="wtd" type="text" placeholder="First-Name" style="padding: 7px;margin-top: 10px; height:50px; border: 1px solid black; font-size: 18px;color: black;text-align: left; " required name="first_name">
              <input class="wtd" type="text" placeholder="Last-Name" style="padding: 7px;margin-top: 10px; height:50px; border: 1px solid black; font-size: 18px;color: black;text-align: left; " required name="last_name">
              <br>
              <input class="wtd" type="text" placeholder="E-Mail" style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " name="email">
              <br>
              <input class="wtd" type="text" placeholder="Mobile"
                style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " required name="phone">
              <br>
              <input class="wtd" type="text" placeholder="Nationality" style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " name="nationality">
              <br>
              <!-- <input class="wtd" type="checkbox" name="c-box" id="c-box" style="margin-top: 10px;"> -->
              <label class="wtd" for="c-box"> <input type="checkbox"> I Declare that Iam citizien of Bangladesh</label>
              <br>
              <button type="submit" class="btn btn-btn" style="background-color: #eb1d5d;"> PROCEED </button>
            </div>
          </div>
      </form>
    </div>
    <!----Main content-->
@endsection

@section('footer')
<script>
    $(function(){
    
        $.ajaxSetup({
    
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });
    
        $('#support-form').submit(function(event) {

            event.preventDefault();
            var formData = $(this).serialize();
            var url = '{{route("send.support")}}';
    
            $.ajax({
    
                url: url,
                method: 'POST',
                data: formData,
                dataType: 'json',
    
                success: function(data){

                    if (data.error.length > 0) {
    
                        var error_html = '';
    
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }
    
                        $('#form_output').html(error_html);

                    } else {
    
                        $('#form_output').html(data.success);
                        $('#support-form')[0].reset();
                    }
                    
                },
    
                error: function(error) {
    
                    console.log(error);
                }
    
    
            });
    
    
    });
    
    });
    
        
    
        
</script>
@endsection