@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Single Course')}}
@endsection

@section('content')
    <!-- Page Title-->
 <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">{{ optional($item)->title }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">{{ optional($item)->slug }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        <div class="col-lg-8 col-md-8 col-12">
            <div class="card mb-4 faq-box">
                <input type="hidden" id="item_id" value="{{$item->id}}">
                <img class="img-fluid" style="height:250px;object-fit:cover;" src="{{ $item->image ? asset('assets/images/'.optional($item)->image) : asset('assets/images/placeholder.png') }}"alt="No Image Found">
                <div class="card-body">
                    <h4 class="card-title">{{ optional($item)->title }}</h4>
                    <small><b>Price : </b> ${{ optional($item)->price }} <i>{{ optional($item)->time }}</i></small><br/>
                    <p class="card-text">{!! optional($item)->description !!}</p>
                </div>
                {{-- <button class="btn btn-primary m-0" id="but_to_cart"><i class="icon-bag"></i><span>{{ __('Buy Now') }}</span></button> --}}
            </div>
        </div>
        <div class="col-md-4 col-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('course_order') }}" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" required class="form-control" id="name" placeholder="Input Your Name">
                        <input type="hidden" required name="course_id" class="form-control" value="{{ $item->id }}" id="name" placeholder="Input Your Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" required name="email" class="form-control" id="email" placeholder="example@exmp.com">
                      </div>
                      <div class="form-group">
                        <label for="phone">Your Phone Number</label>
                        <input type="number"required name="phone" class="form-control" id="phone" placeholder="017********">
                      </div>
                      <div class="form-group">
                        <label for="address">Full Address</label>
                        <textarea class="form-control" required name="address" id="address" rows="3"></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="p_method">Payment Method</label>
                        <div class="form-check">
                          <input class="form-check-input" required type="radio" name="p_method" id="p_method" value="1" checked>
                          <label class="form-check-label" for="p_method">
                            Cache On Delivery
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-block">Buy Now</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
  </div>
@endsection