
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@if (url()->current() == route('front.index'))
<title>@yield('hometitle')</title>
@else
<title>{{$setting->title}} -@yield('title')</title>
@endif

<!-- SEO Meta Tags-->
@yield('meta')
<meta name="author" content="{{$setting->title}}">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="167x167" href="{{asset('assets/images/'.$setting->favicon)}}">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">

@yield('styleplugins')

{{-- <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/styles.min.css')}}">

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/responsive.css')}}">

<link href="{{ asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color) }}" rel="stylesheet"> --}}

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/new/all.min.css')}}">
<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/new/lib/owlcarousel/assets/owl.carousel.min.css')}}">
<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/new/lib/lightbox/css/lightbox.min.css')}}">
<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/new/style.css')}}">

<!-- Modernizr-->
<script src="{{asset('assets/front/js/modernizr.min.js')}}"></script>

@if (DB::table('languages')->where('is_default',1)->first()->rtl == 1)
    <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
@endif
<style>
    {{$setting->custom_css}}
</style>
{{-- Google AdSense Start --}}
@if ($setting->is_google_adsense == '1')
    {!! $setting->google_adsense !!}
@endif
{{-- Google AdSense End --}}

{{-- Google AnalyTics Start --}}
@if ($setting->is_google_analytics == '1')
    {!! $setting->google_analytics !!}
@endif
{{-- Google AnalyTics End --}}

{{-- Facebook pixel  Start --}}
@if ($setting->is_facebook_pixel == '1')
    {!! $setting->facebook_pixel !!}
@endif
{{-- Facebook pixel End --}}

</head>
<!-- Body-->
<body class="
@if($setting->theme == 'theme1')
body_theme1
@elseif($setting->theme == 'theme2')
body_theme2
@elseif($setting->theme == 'theme3')
body_theme3
@elseif($setting->theme == 'theme4')
body_theme4
@endif
">
{{-- @if($setting->is_loader == 1) --}}
<!-- Preloader Start -->
@if ($setting->is_loader == 0)
<div id="preloader">
    <img src="{{ asset('assets/images/'.$setting->loader) }}" alt="{{ __('Loading...') }}">
</div>
@endif

<!-- Preloader endif -->
{{-- @endif --}}

<!-- Header-->
<div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand text-secondary">
                <div class="logo"> <a href="{{ Url('/') }}"><img src="{{ asset('/') }}assets/front/img/logo.png" alt="#"></a> </div>
				
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                   
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">হোম</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="about.html" class="dropdown-item">আমাদের সম্পর্কে</a>
                            <a href="testimonial.html" class="dropdown-item">ডোনার</a>
							<a href="testimonial.html" class="dropdown-item">ডোনার তালিকা</a>
							<a href="testimonial.html" class="dropdown-item">ব্লগ</a>
						
					
                        </div>
                    </div>
                   
                    
                    <a href="sheba.html" class="nav-item nav-link">ফ্রি সেবার জন্য সদস্য</a>
					<div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">প্রশিক্ষণ</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('courses','our-workshops') }}" class="dropdown-item">Our Workshops (কর্মশালা)</a>
                            <a href="{{ route('courses','mother-father-traning') }}" class="dropdown-item">মা -বাবাদের ট্রেনিং</a>
							<a href="{{ route('courses','teacher-traning') }}" class="dropdown-item">শিক্ষক প্রশিক্ষণ  </a>
							<a href="{{ route('courses','child-iep-program') }}" class="dropdown-item">Child IEP Program</a>
					
                        </div>
                    </div>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">এসেসমেন্ট/টেষ্ট </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('children_skills') }}" class="dropdown-item">বাচ্চাদের দক্ষতা / সামর্থ্য নিয়ে ফর্ম </a>
                            <a href="testimonial.html" class="dropdown-item"></a>
							<a href="testimonial.html" class="dropdown-item">Higher Level Language Screening/IO Test(HLLS/IQ) </a>
							<a href="testimonial.html" class="dropdown-item">Learning Disability Assessment (LDA)</a>
							<a href="testimonial.html" class="dropdown-item">Articulation Screening (AS)</a>
							<a href="testimonial.html" class="dropdown-item">Preverbal Screening (PVS)</a>
							<a href="testimonial.html" class="dropdown-item">Dementia Assessment(DA)</a>
							<a href="testimonial.html" class="dropdown-item">Stammering Assessment (SA)</a>
							<a href="testimonial.html" class="dropdown-item">Voice Test (VT)</a>
							<a href="testimonial.html" class="dropdown-item">Speech Language Screen for Aphasia (SLSA)</a>
							<a href="testimonial.html" class="dropdown-item">Apraxia of Speech Assessment (ASA)</a>
							
							<a href="testimonial.html" class="dropdown-item">Orapharangial Assessment (OPA)</a>
							
					
                        </div>
                    </div>
					
					
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">অডিওলজিক্যাল পরীক্ষা</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="testimonial.html" class="dropdown-item">Pure Tone Audiometry (PTA)</a>
                            <a href="testimonial.html" class="dropdown-item">Speech recognition Threshold (SRT)</a>
							<a href="testimonial.html" class="dropdown-item">Speech Audiometry(SA)  </a>
							<a href="testimonial.html" class="dropdown-item"> Play Audiometry (PA) </a>
							<a href="testimonial.html" class="dropdown-item"> Behavioral observational Audiometry(BOA) </a>
					
                        </div>
                    </div>
                    
                    <a href="service.html" class="nav-item nav-link">সার্ভিস</a>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ইনটারভেনশন কনসাল্টটেন্সি </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="team.html" class="dropdown-item">স্পিচ এন্ড ল্যাগুয়েজ  থেরাপি</a>
                            <a href="testimonial.html" class="dropdown-item">অকুপেশনাল থেরাপি</a>
							<a href="testimonial.html" class="dropdown-item">সেন্সরি ইন্ট্রিগ্রেশন</a>
							<a href="testimonial.html" class="dropdown-item">গ্রুপথেরাপি  </a>
							<a href="testimonial.html" class="dropdown-item"> মাসিক থেরাপি প্রোগ্রাম </a>
							<a href="testimonial.html" class="dropdown-item">ডাক্তার কনসালটেন্সি</a>
							<a href="testimonial.html" class="dropdown-item">টেলিমেডিসিন এন্ড হোমকেয়ার সার্ভিস </a>
							<a href="testimonial.html" class="dropdown-item">ডায়েট কনসালটেন্সি</a>
							<a href="testimonial.html" class="dropdown-item">স্পেশাল স্কুলিং</a>
							
							<a href="testimonial.html" class="dropdown-item">ভোকেশনাল টেনিং</a>
							
							
                        </div>
                    </div>
					
					
                    <a href="contact.html" class="nav-item nav-link">যোগাযোগ</a>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                        <h6 class="m-0">+8801762030500</h6>
						<h6 class="m-0">+8801979030500</h6>
                    </div>
                    <div class="toolbar-item"><a href="{{route('front.cart')}}">
                        <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span><span class="text-label">{{ __('Cart') }}</span></div>
                        </a>
                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">
                        @include('includes.header_cart')
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<!-- Page Content-->
@yield('content')

<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
    @if ($setting->announcement_type == 'newletter')
        <div class="announcement-with-content">
            <div class="left-area">
                <img src="{{ asset('assets/images/'.$setting->announcement) }}" alt="">
            </div>
            <div class="right-area">
                <h3 class="">{{  $setting->announcement_title }}</h3>
                <p>{{ $setting->announcement_details }}</p>
                <form class="subscriber-form" action="{{route('front.subscriber.submit')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="email" name="email" placeholder="{{__('Your e-mail')}}">
                        <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                    <div aria-hidden="true">
                        <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                    </div>

                    <button class="btn btn-primary btn-block mt-2" type="submit">
                        <span>{{__('Subscribe')}}</span>
                    </button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ $setting->announcement_link }}">
            <img src="{{ asset('assets/images/'.$setting->announcement) }}" alt="">
        </a>
    @endif


</div>
<!--    announcement banner section end   -->

<!-- Site Footer-->
<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
						<img src="img/logo.png" alt="#">
                    
                </a>
                <p>Therapy Lab provides medical treatment, rehabilitation and support services focusing on physical, emotional, social, psychological and economic aspects. It promotes the development of skilled personnel in health care and rehabilitation in the country</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">যোগাযোগ করুন</h4>
                <!--<p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>-->
                <p><i class="fa fa-map-marker-alt text-white mr-2"></i>বাসা- ২৫৭ .রোড-৮ আমতলা কাঁচাবাজার,সেনপাড়া  পর্বতা ঈদগাঁ মাঠ ও বায়তুল কারার মসজিদের সামনে মিরপুর ১০,ঢাকা ১২১৬।</p>
                <p><i class="fa fa-phone-alt text-white mr-2"></i>+01762-030500</p>
				<p><i class="fa fa-phone-alt text-white mr-2"></i>+01979030500</p>
                <p><i class="fa fa-envelope text-white mr-2"></i>info@therapylabonline.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Our Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Pricing Plan</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Meet The Team</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="mb-2 text-center text-white-50">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>
<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- Cookie alert dialog  -->
@if ($setting->is_cookie == 1)
@include('cookieConsent::index')
@endif

<!-- Cookie alert dialog  -->


@php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
@endphp

<script>
    var mainbs = {!! $mainbs !!};
    var decimal_separator = '{!! $setting->decimal_separator !!}';
    var thousand_separator = '{!! $setting->thousand_separator !!}';
</script>

<script>
    let language = {
        Days : '{{__('Days')}}',
        Hrs : '{{__('Hrs')}}',
        Min : '{{__('Min')}}',
        Sec : '{{__('Sec')}}',
    }

</script>



<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
{{-- <script type="text/javascript" src="{{asset('assets/front/js/plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/scripts.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.plugin.js')}}"></script>--}}


<script type="text/javascript" src="{{asset('assets/front/js/new/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/easing/easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/waypoints/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/owlcarousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/isotope/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/new/lightbox/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/myscript.js')}}"></script> 

<script type="text/javascript" src="{{asset('assets/front/js/new/main.js')}}"></script>

@yield('script')

@if($setting->is_facebook_messenger	== '1')
 {!!  $setting->facebook_messenger !!}
@endif



<script type="text/javascript">
    let mainurl = '{{route('front.index')}}';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
    </script>

    @if(Session::has('error'))
    <script>
      $(document).ready(function(){
        DangerNotification('{{Session::get('error')}}')
      })

    </script>
    @endif
    @if(Session::has('success'))
    <script>
      $(document).ready(function(){
        SuccessNotification('{{Session::get('success')}}');
      })

    </script>
    @endif

</body>
</html>
