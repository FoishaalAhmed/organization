

@extends('backend.layouts.app')
@section('title', 'Product Update')
@section('head')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('products.index')}}"><i class="fa fa-group"></i> {{__('Products')}}</a></li>
            <li class="active">{{__('Product Update')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Product header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Product Update')}}</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('products.index')}}" class="btn btn-sm bg-purple"><i class="fa fa-list"></i> {{__('Product List')}}</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br>
                        @include('includes.error')
                        <form action="{{route('products.update', $product->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-9">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Name')}}</label>
                                            <input name="name" placeholder="{{__('Name')}}" class="form-control" required="" type="text" value="{{ $product->name }}" autocomplete="off" id="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Slug')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Slug')}}" name="slug" value="{{$product->slug}}" required="" autocomplete="off" id="slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Category')}}</label>
                                            <select name="categories[]" class="form-control select2" multiple required id="categories" style="width: 100%">
                                                @foreach ($categories as $category)
                                                <option value="{{$category->id}}"
                                                    @if ($product_categories)
                                                        @if (in_array($category->id, $product_categories)) {{'selected'}} @endif 
                                                    @endif
                                                    >{{$category->name}} @if ($category->parent_name != null)
                                                        ({{$category->parent_name}})
                                                    @endif</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Size')}}</label>
                                            <select name="sizes[]" class="form-control select2" multiple id="sizes" style="width: 100%">
                                                @foreach ($sizes as $size)
                                                <option value="{{$size->id}}"
                                                    @if ($product_sizes)
                                                        @if (in_array($size->id, $product_sizes)) {{'selected'}} @endif 
                                                    @endif
                                                    >{{$size->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Color')}}</label>
                                            <select name="colors[]" class="form-control select2" multiple id="colors" style="width: 100%">
                                                @foreach ($colors as $color)
                                                <option value="{{$color->id}}"
                                                    @if ($product_colors)
                                                        @if (in_array($color->id, $product_colors)) {{'selected'}} @endif 
                                                    @endif
                                                    >{{$color->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Quantity')}}</label>
                                            <input type="number" class="form-control" placeholder="{{__('Quantity')}}" name="quantity" value="{{$product->quantity}}" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Current Price')}}</label>
                                            <input type="number" class="form-control" placeholder="{{__('Current Price')}}" name="current_price" value="{{$product->current_price}}" autocomplete="off" required step="0.01">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Previous Price')}}</label>
                                            <input type="number" class="form-control" placeholder="{{__('Previous Price')}}" name="previous_price" value="{{$product->previous_price}}" autocomplete="off" required step="0.01">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>{{__('Seving Percentage')}}</label>
                                            <input type="number" class="form-control" placeholder="{{__('Seving Percentage')}}" name="saving" value="{{$product->saving}}" autocomplete="off" required step="0.01">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{__('Description')}}</label>
                                        <textarea name="description" class="form-control textarea" >{{$product->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box box-teal box-solid">
                                    <div class="box-header with-border">

                                        <h3 class="box-title"> {{__('Product Cover Photo')}} </h3>

                                    </div>
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="{{asset($product->cover)}}" alt="Product picture" id="product-photo">
                                        <input type="file" name="cover" onchange="readPicture(this)">
                                    </div>
                                    <!-- /.box-body -->
                                </div>

                                <div class="box box-teal box-solid">
                                    <div class="box-header with-border">

                                        <h3 class="box-title"> {{__('More Product Photo')}} </h3>

                                    </div>
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="//placehold.it/200x200" alt="Product picture">
                                        <input type="file" name="photo[]" multiple>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                    <button type="submit" class="btn btn-sm bg-teal">{{__('Update')}}</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Room header) -->
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Product Photo')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <?php foreach ($product_photos as $key => $value) { ?>
                            <div class="col-md-3">
                                <div class="form-group rzimg-wrap" id="to_be_hide_<?=$value->id?>" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <label for=""></label>
                                        <span class="rzclose" onclick="deleteThisImage(<?=$value->id?>);" style="margin-top: 20px;">x</span>
                                        <img src="{{asset($value->photo)}}" alt="" style="width: 100%" height="180px;">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script src="{{asset('public/backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

    <script>
        function readPicture(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#product-photo')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                };
        
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        });

        $("#name").keyup(function(){
        
            var name = $("#name").val();

            var slug = (name.replace(/[^a-zA-Z0-9]+/g, '-')).toLowerCase();
            $("#slug").val(slug);

        });

        function deleteThisImage(id) {

            if (confirm("Are you sure ?")) { 

                var url = '{{route("delete.product.photo")}}';

                $.ajaxSetup({

                    headers: {'X-CSRF-Token' : '{{csrf_token()}}'}

                });

                $.ajax({

                    url: url,
                    method: 'POST',
                    data: { 'id' : id, },

                    success: function(data){

                        $("#to_be_hide_" + id).fadeOut(2000);
                        
                    },

                    error: function(error) {

                        console.log(error);
                    }


                });

            }
        }
    </script>
@endsection

