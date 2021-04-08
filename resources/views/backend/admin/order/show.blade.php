

@extends('backend.layouts.app')
@section('title', 'Order Detail')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Order Detail
        </h1>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> BanglaBesh.
                    <small class="pull-right">Date: {{date('d/M/Y')}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Shpping Address
                <address>
                    <strong>{{$shippingInfo->name}}</strong><br>
                    {{$shippingInfo->address}}<br>
                    Phone: {{$shippingInfo->phone}}<br>
                    Email: {{$shippingInfo->email}}
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                
            </div>
            <div class="col-sm-4 invoice-col">
                Order Info
                <address>
                    Order No: #{{date('Y', strtotime($order->order_date_time))}}{{$order->id}} <br>
                    Date & Time: {{date('d M, Y h:i A', strtotime($order->order_date_time))}}<br>
                </address>
            </div>
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial #</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetails as $item)
                            
                        
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>
                                {{$item->name}} 

                                @if ($item->size != null)
                                    <br>
                                    Size: {{$item->size}} 
                                @endif

                                @if ($item->color != null)
                                    <br>
                                    Color: {{$item->color}} 
                                @endif
                            </td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->total}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Shipping:</th>
                            <td>৳ {{$order->shipping_charge}}</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>৳ {{$order->amount}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->
@endsection

