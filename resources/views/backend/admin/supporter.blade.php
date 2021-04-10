@extends('backend.layouts.app')
@section('title', 'Supporters')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            {{__('Dashboard')}}
            <small>Version 2.0</small>
        </h1>
        
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Supporters')}}</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">{{__('Sl.')}}</th>
                                    <th style="width: 25%;">{{__('Name')}}</th>
                                    <th style="width: 20%;">{{__('Email')}}</th>
                                    <th style="width: 10%;">{{__('Phone')}}</th>
                                    <th style="width: 20%;">{{__('Nationality')}}</th>
                                    <th style="width: 10%;">{{__('Amount')}}</th>
                                    <th style="width: 10%;">{{__('currency')}}</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($supports as $key => $support)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$support->first_name.' '.$support->last_name}}</td>
                                    <td>{{$support->email}}</td>
                                    <td>{{$support->phone}}</td>
                                    <td>{{$support->nationality}}</td>
                                    <td>{{$support->amount}}</td>
                                    <td>{{$support->currency}}</td>
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