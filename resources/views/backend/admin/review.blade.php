@extends('backend.layouts.app')
@section('title', 'Orders')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('reviews.index')}}"><i class="fa fa-group"></i> {{__('Orders')}}</a></li>
            <li class="active">{{__('List')}}</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Product header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Orders')}}</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">{{__('Sl.')}}</th>
                                    <th style="width: 20%;">{{__('Product')}}</th>
                                    <th style="width: 15%;">{{__('Name')}}</th>
                                    <th style="width: 15%;">{{__('Email')}}</th>
                                    <th style="width: 30%;">{{__('Review')}}</th>
                                    <th style="width: 10%;">{{__('Status')}}</th>
                                    <th style="width: 5%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $key => $review)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$review->product}}</td>
                                    <td>{{$review->name}}</td>
                                    <td>{{$review->email}}</td>
                                    <td>{{$review->review_text}}</td>
                                    <td>
                                        @if ($review->status == 0) {{'Not Approved'}}

                                        @else {{'Approved'}}

                                        @endif
                                    </td>
                                    <td>

                                        @if ($review->status == 0)

                                        <a class="btn btn-sm bg-green" href="{{route('reviews.status',[$review->id, 1])}}"><span class="fa fa-thumbs-up"></span></a>

                                        @else

                                        <a class="btn btn-sm bg-red" href="{{route('reviews.status',[$review->id, 0])}}"><span class="fa fa-thumbs-down"></span></a>

                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection