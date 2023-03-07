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
        <h1 class="display-3 text-uppercase mb-3">{{ optional($courses[0])->category }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">{{ optional($courses[0])->category }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        @foreach ($courses as $item)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('single-course',$item->slug) }}" class="card mb-4 faq-box">
                    <img class="img-fluid" style="height:250px;object-fit:cover;" src="{{ $item->image ? asset('assets/images/'.optional($item)->image) : asset('assets/images/placeholder.png') }}"alt="No Image Found">
                    <div class="card-body">
                        <h6 class="card-title">{{ optional($item)->title }}</h6>
                        <p class="card-text">{!! Str::limit(optional($item)->description,230) !!}</p>
                        <small><b>Price : </b> ${{ optional($item)->price }} <i>{{ optional($item)->time }}</i></small><br/>
                        <span class="text-sm text-muted link">{{ __('View Details') }} <i class="icon-chevron-right"></i></span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
  </div>
@endsection