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
            <li><a href="{{route('orders.index')}}"><i class="fa fa-group"></i> {{__('Orders')}}</a></li>
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
                                    <th style="width: 15%;">{{__('Order DateTime')}}</th>
                                    <th style="width: 15%;">{{__('Shipping Charge')}}</th>
                                    <th style="width: 20%;">{{__('Amount')}}</th>
                                    <th style="width: 20%;">{{__('Delivery DateTime')}}</th>
                                    <th style="width: 10%;">{{__('Status')}}</th>
                                    <th style="width: 15%;">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{date('d M, Y h:i A', strtotime($order->order_date_time))}}</td>
                                    <td>{{$order->shipping_charge}}</td>
                                    <td>{{$order->amount}}</td>
                                    <td>
                                        @if ($order->delivered_date_time != null)
                                             {{date('d M, Y h:i A', strtotime($order->delivered_date_time))}}
                                        @endif
                                       
                                    </td>
                                    <td>
                                        @if ($order->status == 0) {{'Pending'}}
                                            
                                        @elseif($order->status == 1) {{'Delivered'}}

                                        @else
                                            {{'Canceled'}}
                                        @endif
                                    </td>
                                    <td>
                                    	<a class="btn btn-sm bg-teal" href="{{route('orders.show',[$order->id])}}"><span class="fa fa-eye"></span></a>

                                        @if ($order->status == 0)

                                        <a class="btn btn-sm bg-green" href="{{route('orders.status',[$order->id, 1])}}"><span class="fa fa-check-circle"></span></a>

                                        <a class="btn btn-sm bg-red" href="{{route('orders.status',[$order->id, 2])}}"><span class="fa fa-times"></span></a>

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