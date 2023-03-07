@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Teachers Traning')}}
@endsection

@section('content')
    <!-- Page Title-->
 <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">বাচ্চাদের দক্ষতা / সামর্থ্য নিয়ে ফর্ম</h3>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">বাচ্চাদের দক্ষতা / সামর্থ্য নিয়ে ফর্ম</h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        <div class="col-md-12">
            <h3>বাচ্চাদের দক্ষতা / সামর্থ্য - এর প্রাপ্ত নম্বরঃ </h3>
            <div class="mt-4 card shadow border">
                <div class="card-body">
                    <h1 class="text-center">{{ $sum }}</h1>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection