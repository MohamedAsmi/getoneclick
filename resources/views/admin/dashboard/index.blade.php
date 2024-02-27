@extends('admin.layouts.app')
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{asset('assets/vendors/images/banner-img.png')}}" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Welcome back 
				<div class="weight-600 font-30 text-blue">{{Auth::user()->name}}</div>
            </h4>
            <p class="font-18 max-width-600">
                A delivery challan is a vital document in logistics, confirming the delivery of goods or services. It includes sender and recipient details, a unique reference, dispatch date, item description, and quantity. This document ensures transparency and accuracy in transactions and serves administrative and legal purposes, including taxation and dispute resolution.</p>
        </div>
    </div>
</div>
@endsection
