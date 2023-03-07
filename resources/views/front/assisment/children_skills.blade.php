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
            <form action="{{ route("children_skills.store") }}" method="post" class="col-md-12 border card shadow">
                    @csrf
                    <div class="card-header">
                        <h3>বাচ্চাদের দক্ষতা / সামর্থ্য নিয়ে ফর্ম</h3>
                    </div>
                      <div class="card-body">
                        <div class="mb-3 row">
                            <h5 class="mb-3 border-bottom">ক্ষেত্র ১। যোগাযোগ সম্পর্কিতঃ গ্রহনযোগ্য উপায়ে ভাবের আদান-প্রদান করার দক্ষতা ।</h5>
                                <label for="inputPassword" class="col-sm-7 col-form-label">ক। শিশু অন্যের কথা বোঝে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_ko" id="one_ko_no" value="3">
                                        <label class="form-check-label" for="one_ko_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_ko" id="one_ko_midle" value="2">
                                        <label class="form-check-label" for="one_ko_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_ko" id="one_ko_help" value="1">
                                        <label class="form-check-label" for="one_ko_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_ko" id="one_ko_yes" value="0">
                                        <label class="form-check-label" for="one_ko_yes">না</label>
                                    </div>
                                </div>

                                <hr>

                                <label for="inputPassword" class="col-sm-7 col-form-label">খ। বয়স উপযোগী কথা বলে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_kho" id="one_kho_no" value="3">
                                        <label class="form-check-label" for="one_kho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_kho" id="one_kho_midle" value="2">
                                        <label class="form-check-label" for="one_kho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_kho" id="one_kho_help" value="1">
                                        <label class="form-check-label" for="one_kho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_kho" id="one_kho_yes" value="0">
                                        <label class="form-check-label" for="one_kho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label">গ। তোতলামি উচ্চারণগত সমস্যা ছাড়াই স্পষ্ট স্বরে কথা বলতে পারে কি?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_go" id="one_go_no" value="3">
                                        <label class="form-check-label" for="one_go_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_go" id="one_go_midle" value="2">
                                        <label class="form-check-label" for="one_go_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_go" id="one_go_help" value="1">
                                        <label class="form-check-label" for="one_go_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_go" id="one_go_yes" value="0">
                                        <label class="form-check-label" for="one_go_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label">ঘ। নিজের প্রয়োজন বোঝাতে ইশারা ইংগিত ব্যবহার করে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_gho" id="one_gho_no" value="3">
                                        <label class="form-check-label" for="one_gho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_gho" id="one_gho_midle" value="2">
                                        <label class="form-check-label" for="one_gho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_gho" id="one_gho_help" value="1">
                                        <label class="form-check-label" for="one_gho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_gho" id="one_gho_yes" value="0">
                                        <label class="form-check-label" for="one_gho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label">ঙ। বডিপার্টস (মাথা হাত পা ইত্যাদি) এবং চারপাশের খেলনা জিনিসপত্রের নাম চিনে বলতে পারে কি?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_uuo" id="one_uuo_no" value="3">
                                        <label class="form-check-label" for="one_uuo_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_uuo" id="one_uuo_midle" value="2">
                                        <label class="form-check-label" for="one_uuo_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_uuo" id="one_uuo_help" value="1">
                                        <label class="form-check-label" for="one_uuo_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one_uuo" id="one_uuo_yes" value="0">
                                        <label class="form-check-label" for="one_uuo_yes">না</label>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <h5 class="mb-3 border-bottom">ক্ষেত্র ২। সমাজিকতা ও আচরণ সম্পর্কিতঃ অন্যের সাথে বয়স উপযোগী সামাজিক আচরন ও মেলামেশার দক্ষতা ।</h5>
                                <label for="inputPassword" class="col-sm-7 col-form-label">ক। হাই, হ্যালো, সালাম/আদাব দিয়ে সম্বোধন করে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_ko" id="two_ko_no" value="3">
                                        <label class="form-check-label" for="two_ko_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_ko" id="two_ko_midle" value="2">
                                        <label class="form-check-label" for="two_ko_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_ko" id="two_ko_help" value="1">
                                        <label class="form-check-label" for="two_ko_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_ko" id="two_ko_yes" value="0">
                                        <label class="form-check-label" for="two_ko_yes">না</label>
                                    </div>
                                </div>

                                <hr>

                                <label for="inputPassword" class="col-sm-7 col-form-label"> খ। পরিবেশ পরিস্থিতি বোঝে অন্যের সাথে মিলামেশা করে কী?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_kho" id="two_kho_no" value="3">
                                        <label class="form-check-label" for="two_kho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_kho" id="two_kho_midle" value="2">
                                        <label class="form-check-label" for="two_kho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_kho" id="two_kho_help" value="1">
                                        <label class="form-check-label" for="two_kho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_kho" id="two_kho_yes" value="0">
                                        <label class="form-check-label" for="two_kho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> গ। গুড মর্নিং, গুড নাইট বা সকাল দুপুর বিকেল রাত বোঝে বলতে পারে কী?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_go" id="two_go_no" value="3">
                                        <label class="form-check-label" for="two_go_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_go" id="two_go_midle" value="2">
                                        <label class="form-check-label" for="two_go_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_go" id="two_go_help" value="1">
                                        <label class="form-check-label" for="two_go_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_go" id="two_go_yes" value="0">
                                        <label class="form-check-label" for=two_go_"yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> ঘ। পরিবারের সদস্য মা-বাবা, বড়, ছোট সম্পর্ক বোঝে কী? </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="two_gho_no" value="3">
                                        <label class="form-check-label" for="two_gho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="two_gho_midle" value="2">
                                        <label class="form-check-label" for="two_gho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="two_gho_help" value="1">
                                        <label class="form-check-label" for="two_gho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="two_gho_yes" value="0">
                                        <label class="form-check-label" for="two_gho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label">ঙ। অন্যের সাথে দেওয়া নেওয়া করার সময় অনুরোধ করতে পারে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_uuo" id="two_uuo_no" value="3">
                                        <label class="form-check-label" for="two_uuo_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_uuo" id="two_uuo_midle" value="2">
                                        <label class="form-check-label" for="two_uuo_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_uuo" id="two_uuo_help" value="1">
                                        <label class="form-check-label" for="two_uuo_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_uuo" id="two_uuo_yes" value="0">
                                        <label class="form-check-label" for="two_uuo_yes">না</label>
                                    </div>
                                </div>
                        </div>
                        
                        
                        <div class="mb-3 row">
                            <h5 class="mb-3 border-bottom">ক্ষেত্র ৩। বাইরে ভ্রমন এবং জীবন দক্ষতা সম্পর্কিতঃ বাইরে পরিবেশের সাথে খাপ খাওয়ানোর দক্ষতা।</h5>
                                <label for="inputPassword" class="col-sm-7 col-form-label">ক। সমস্যা ছাড়াই বাইরে নিজে নিজে খেলতে বা ঘুরতে যেতে পারে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_no" value="3">
                                        <label class="form-check-label" for="three_ko_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_midle" value="2">
                                        <label class="form-check-label" for="three_ko_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_help" value="1">
                                        <label class="form-check-label" for="three_ko_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_yes" value="0">
                                        <label class="form-check-label" for="three_ko_yes">না</label>
                                    </div>
                                </div>

                                <hr>

                                <label for="inputPassword" class="col-sm-7 col-form-label">  খ। অচেনা পরিবেশে অন্য ব্যাক্তির সাথে মিশতে পারে কী?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_no" value="3">
                                        <label class="form-check-label" for="three_kho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_midle" value="2">
                                        <label class="form-check-label" for="three_kho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_help" value="1">
                                        <label class="form-check-label" for="three_kho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_yes" value="0">
                                        <label class="form-check-label" for="three_kho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> গ। বাইরের পরিবেশে জনসমাগমে / টয়লেটে নিজেকে খাপ খাওয়াতে পারে কি?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_no" value="3">
                                        <label class="form-check-label" for="three_go_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_midle" value="2">
                                        <label class="form-check-label" for="three_go_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_help" value="1">
                                        <label class="form-check-label" for="three_go_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_yes" value="0">
                                        <label class="form-check-label" for="three_go_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> ঘ। বাইরে গিয়ে নিজের প্রয়োজন ভালোমন্দ বোঝাতে পারে কী? </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="three_gho_no" value="3">
                                        <label class="form-check-label" for="three_gho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="three_gho_midle" value="2">
                                        <label class="form-check-label" for="three_gho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_gho" id="three_gho_help" value="1">
                                        <label class="form-check-label" for="three_gho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_gho" id="three_gho_yes" value="0">
                                        <label class="form-check-label" for="three_gho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> ঙ। পছন্দের খাবার খেলনা নিতে জিদ না করে বা অন্যের কাছ থেকে চেয়ে নিতে পারে কী? </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_no" value="3">
                                        <label class="form-check-label" for="three_uuo_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_midle" value="2">
                                        <label class="form-check-label" for="three_uuo_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_help" value="1">
                                        <label class="form-check-label" for="three_uuo_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_yes" value="0">
                                        <label class="form-check-label" for="three_uuo_yes">না</label>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <h5 class="mb-3 border-bottom">ক্ষেত্র ৩। বাইরে ভ্রমন এবং জীবন দক্ষতা সম্পর্কিতঃ বাইরে পরিবেশের সাথে খাপ খাওয়ানোর দক্ষতা।</h5>
                                <label for="inputPassword" class="col-sm-7 col-form-label">ক। সমস্যা ছাড়াই বাইরে নিজে নিজে খেলতে বা ঘুরতে যেতে পারে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_no" value="3">
                                        <label class="form-check-label" for="three_ko_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_midle" value="2">
                                        <label class="form-check-label" for="three_ko_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_help" value="1">
                                        <label class="form-check-label" for="three_ko_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_ko" id="three_ko_yes" value="0">
                                        <label class="form-check-label" for="three_ko_yes">না</label>
                                    </div>
                                </div>

                                <hr>

                                <label for="inputPassword" class="col-sm-7 col-form-label"> খ। পরিবেশ পরিস্থিতি বোঝে অন্যের সাথে মিলামেশা করে কী?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_no" value="3">
                                        <label class="form-check-label" for="three_kho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_midle" value="2">
                                        <label class="form-check-label" for="three_kho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_help" value="1">
                                        <label class="form-check-label" for="three_kho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_kho" id="three_kho_yes" value="0">
                                        <label class="form-check-label" for="three_kho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> গ। গুড মর্নিং, গুড নাইট বা সকাল দুপুর বিকেল রাত বোঝে বলতে পারে কী?  </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_no" value="3">
                                        <label class="form-check-label" for="three_go_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_midle" value="2">
                                        <label class="form-check-label" for="three_go_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_help" value="1">
                                        <label class="form-check-label" for="three_go_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_go" id="three_go_yes" value="0">
                                        <label class="form-check-label" for="three_go_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label"> ঘ। পরিবারের সদস্য মা-বাবা, বড়, ছোট সম্পর্ক বোঝে কী? </label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="three_gho_no" value="3">
                                        <label class="form-check-label" for="three_gho_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two_gho" id="three_gho_midle" value="2">
                                        <label class="form-check-label" for="three_gho_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_gho" id="three_gho_help" value="1">
                                        <label class="form-check-label" for="three_gho_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_gho" id="three_gho_yes" value="0">
                                        <label class="form-check-label" for="three_gho_yes">না</label>
                                    </div>
                                </div>

                                <hr>
                                
                                <label for="inputPassword" class="col-sm-7 col-form-label">ঙ। অন্যের সাথে দেওয়া নেওয়া করার সময় অনুরোধ করতে পারে কী?</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_no" value="3">
                                        <label class="form-check-label" for="three_uuo_no">হ্যাঁ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_midle" value="2">
                                        <label class="form-check-label" for="three_uuo_midle">মাঝে মাঝে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_help" value="1">
                                        <label class="form-check-label" for="three_uuo_help">সাহায্য লাগে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three_uuo" id="three_uuo_yes" value="0">
                                        <label class="form-check-label" for="three_uuo_yes">না</label>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="card-footer">
                            <button class="btn btn-success">ফর্ম টি জমা দিন</button>
                        </div>
                      </div>
                </form>
        </div>
    </div>
  </div>
@endsection