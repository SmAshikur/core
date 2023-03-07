<?php $__env->startSection('meta'); ?>
    <meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
    <meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php
        function renderStarRating($rating, $maxRating = 5)
        {
            $fullStar = "<i class = 'far fa-star filled'></i>";
            $halfStar = "<i class = 'far fa-star-half filled'></i>";
            $emptyStar = "<i class = 'far fa-star'></i>";
            $rating = $rating <= $maxRating ? $rating : $maxRating;

            $fullStarCount = (int) $rating;
            $halfStarCount = ceil($rating) - $fullStarCount;
            $emptyStarCount = $maxRating - $fullStarCount - $halfStarCount;

            $html = str_repeat($fullStar, $fullStarCount);
            $html .= str_repeat($halfStar, $halfStarCount);
            $html .= str_repeat($emptyStar, $emptyStarCount);
            $html = $html;
            return $html;
        }
    ?>


    <?php if($setting->is_slider == 1): ?>
        <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">THERAPY LAB LTD.</h1>
				<h3>Perfect Therapeutic Medicine</h3>
				<br>
                <br>
				<br>
				<br>
				<p class="text-dark mb-4">Speech & Language Therapy</p>
				<p class="text-dark mb-4">Occupational Therapy</p>
				<p class="text-dark mb-4">Group Therapy</p>
				
                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="<?php echo e(asset('/')); ?>assets/front/img/header.png" alt="">
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="<?php echo e(asset('/')); ?>assets/front/img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">About us (আমাদের সম্পর্কে)</h1>
                    
                    <p class="mb-4">THERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
					 <p class="mb-4">THERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <?php if($setting->is_service == 1): ?>
        <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our services (সেবা সমুহ)</h1>
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">স্পিচ এন্ড ল্যাগুয়েজ  থেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">অকুপেশনাল থেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">গ্রুপথেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">মাসিক থেরাপি প্রোগ্রাম <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
				<div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">ডাক্তার কনসালটেন্সি<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
				<div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">টেলিমেডিসিন এন্ড হোমকেয়ার সার্ভিস <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
				<div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">ডায়েট কনসালটেন্সি<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
				<div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">আনন্দ ল্যাব স্পেশাল স্কুলিং/ ভোকেশনাল টেনিং<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5"> Gallery (প্রোগ্রামের ছবি )</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/front/img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Workshops (কর্মশালা)</h1>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $our_workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <a href="<?php echo e(route('single-course',$item->slug)); ?>"
                            <h2 class="text-uppercase"><?php echo e(optional($item)->title); ?></h2>
                            <h6 class="text-uppercase text-body mb-5"><?php echo e(optional($item)->sub_title); ?></h6>
                        </a>    
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small><?php echo e(optional($item)->price); ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"><?php echo e(optional($item)->time); ?></small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                           <div>
                               <p><?php echo Str::limit(optional($item)->description,150); ?></p>
                           </div>
                           <a class="product-button add_to_single_cart"  data-target="<?php echo e($item->id); ?>" href="javascript:;"  title="<?php echo e(__('Order Now')); ?>"><?php echo e(__('Order Now')); ?></a>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h1>No Data Found</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Mother Training (প্রশিক্ষণ)</h1>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class="text-uppercase"><?php echo e(optional($item)->title); ?></h2>
                        <h6 class="text-uppercase text-body mb-5"><?php echo e(optional($item)->sub_title); ?></h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small><?php echo e(optional($item)->price); ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"><?php echo e(optional($item)->time); ?></small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p><?php echo Str::limit(optional($item)->description,300); ?></p>
                            <a href="<?php echo e(route('single-course',$item->slug)); ?>" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h1 class="text-center">No Data Found</h1>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Teacher Training (প্রশিক্ষণ)</h1>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $teachers_tring; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class="text-uppercase"><?php echo e(optional($item)->title); ?></h2>
                        <h6 class="text-uppercase text-body mb-5"><?php echo e(Str::limit(optional($item)->sub_title,50)); ?></h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small><?php echo e(optional($item)->price); ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"><?php echo e(optional($item)->time); ?></small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <div>
                                <p><?php echo Str::limit(optional($item)->description,150); ?></p>
                            </div>
                            <a href="<?php echo e(route('single-course',$item->slug)); ?>" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h1>No Data Not Found</h1>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Investigation Test Assessment</h1>
            <div class="text-center py-4">
                            <p><a href="#">speech delay disorder screening (SDDS)</a></p>
                            <p><a href="#">Language Delay Disorder Screenng (LDDS)</a></p>
                            <p><a href="#">Higher Level Language Screening/IO Test(HLLS/IQ)</a></p>
                            <p><a href="#">Learning Disability Assessment (LDA)</a></p>
							<p><a href="#">Articulation Screening (AS)</a></p>
							<p><a href="#">Preverbal Screening (PVS)</a></p>
							<p><a href="#">Dementia Assessment(DA)</a></p>
							<p><a href="#">Stammering Assessment (SA)</a></p>
							<p><a href="#">Voice Test (VT)</a></p>
							<p><a href="#">Speech Language Screen for Aphasia (SLSA)</a></p>
							<p><a href="#">Apraxia of Speech Assessment (ASA)</a></p>
							<p><a href="#">Orapharangial Assessment (OPA)</a></p>
							
                           
                        </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Consultancy & Intervention Program</h1>
            <div class="text-center py-4">
                            <p><a href="#">speech delay disorder screening (SDDS)</a></p>
                            <p><a href="#">Language Delay Disorder Screenng (LDDS)</a></p>
                            <p><a href="#">Higher Level Language Screening/IO Test(HLLS/IQ)</a></p>
                            <p><a href="#">Learning Disability Assessment (LDA)</a></p>
							<p><a href="#">Articulation Screening (AS)</a></p>
							<p><a href="#">Preverbal Screening (PVS)</a></p>
							<p><a href="#">Dementia Assessment(DA)</a></p>
							<p><a href="#">Stammering Assessment (SA)</a></p>
							<p><a href="#">Voice Test (VT)</a></p>
							<p><a href="#">Speech Language Screen for Aphasia (SLSA)</a></p>
							<p><a href="#">Apraxia of Speech Assessment (ASA)</a></p>
							<p><a href="#">Orapharangial Assessment (OPA)</a></p>
							
                            
                        </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Dector</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Doe</h4>
                        <p class="m-0">CEO, Founder</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Kate Wilson</h4>
                        <p class="m-0">Designer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Brown</h4>
                        <p class="m-0">Developer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/front/img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Paul Watson</h4>
                        <p class="m-0">Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="<?php echo e(asset('/')); ?>assets/front/img/testimonial-1.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="<?php echo e(asset('/')); ?>assets/front/img/testimonial-2.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="<?php echo e(asset('/')); ?>assets/front/img/testimonial-3.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="<?php echo e(asset('/')); ?>assets/front/img/testimonial-4.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    

    <?php if($setting->campaign_status == 0): ?>
        <div class="deal-of-day-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e($setting->campaign_title); ?></h2>
                            <div class="right-area">
                                    <div class="countdown countdown-alt" data-date-time="<?php echo e($setting->campaign_end_date); ?>"></div>
                                    <a class="right_link" href="<?php echo e(route('front.campaign')); ?>"><?php echo e(__('View All')); ?> <i class="icon-chevron-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel">
                        <?php $__currentLoopData = $campaign_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compaign_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="slider-item">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <?php if(!$compaign_item->item->is_stock()): ?>
                                        <div class="product-badge bg-secondary border-default text-body
                                        "><?php echo e(__('out of stock')); ?></div>
                                    <?php endif; ?>

                                    <?php if($compaign_item->item->previous_price && $compaign_item->item->previous_price !=0): ?>
                                        <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($compaign_item->item)); ?></div>
                                    <?php endif; ?>
                                    <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$compaign_item->item->thumbnail)); ?>" alt="Product">
                                    <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$compaign_item->item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                        <a data-target="<?php echo e(route('fornt.compare.product',$compaign_item->item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                        <?php if($compaign_item->item->is_stock()): ?>
                                            <a class="product-button add_to_single_cart"  data-target="<?php echo e($compaign_item->item->id); ?>" href="javascript:;"  title="<?php echo e(__('To Cart')); ?>"><i class="icon-shopping-cart"></i>
                                            </a>
                                        <?php else: ?>
                                            <a class="product-button" href="<?php echo e(route('front.product',$compaign_item->item->slug)); ?>" title="<?php echo e(__('Details')); ?>"><i class="icon-arrow-right"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                    <div class="product-card-body">

                                        <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$compaign_item->item->category->slug); ?>"><?php echo e($compaign_item->item->category->name); ?></a></div>
                                        <h3 class="product-title"><a href="<?php echo e(route('front.product',$compaign_item->item->slug)); ?>">
                                            <?php echo e(strlen(strip_tags($compaign_item->item->name)) > 35 ? substr(strip_tags($compaign_item->item->name), 0, 35) : strip_tags($compaign_item->item->name)); ?>

                                        </a></h3>
                                        <div class="rating-stars">
                                            <?php echo renderStarRating($compaign_item->item->reviews->avg('rating')); ?>

                                        </div>
                                        <h4 class="product-price">
                                        <?php if($compaign_item->item->previous_price != 0): ?>
                                            <del><?php echo e(PriceHelper::setPreviousPrice($compaign_item->item->previous_price)); ?></del>
                                        <?php endif; ?>

                                        <?php echo e(PriceHelper::grandCurrencyPrice($compaign_item->item)); ?>

                                        </h4>

                                    </div>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if($setting->is_three_c_b_first == 0): ?>
        <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl1']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img1'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle1'])): ?>
                                    <p><?php echo e($banner_first['subtitle1']); ?></p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title1'])): ?>
                                    <h4><?php echo e($banner_first['title1']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl2']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img2'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle2'])): ?>
                                    <p><?php echo e($banner_first['subtitle2']); ?></p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title2'])): ?>
                                    <h4><?php echo e($banner_first['title2']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl3']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img3'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle3'])): ?>
                                    <p><?php echo e($banner_first['subtitle3']); ?> </p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title3'])): ?>
                                    <h4><?php echo e($banner_first['title3']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if($setting->is_popular_category == 0): ?>
        <section class="newproduct-section popular-category-sec mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e($popular_category_title); ?></h2>
                            <div class="links">
                                <?php $__currentLoopData = $popular_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $popular_categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="category_get <?php echo e($loop->first ? 'active' : ''); ?>" data-target="popular_category_view" data-href="<?php echo e(route('front.popular.category',[$popular_categorie->slug,'popular_category','slider'])); ?>"  href="javascript:;" class="<?php echo e($loop->first ? 'active' : ''); ?>"><?php echo e($popular_categorie->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular_category_view d-none">
                    <img  src="<?php echo e(asset('assets/images/ajax_loader.gif')); ?>" alt="">
                </div>

                <div class="row" id="popular_category_view">
                    <div class="col-lg-12">
                        <div class="popular-category-slider  owl-carousel">
                            <?php $__currentLoopData = $popular_category_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_category_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <div class="product-card">
                                    <div class="product-thumb">

                                        <?php if(!$popular_category_item->is_stock()): ?>
                                            <div class="product-badge bg-secondary border-default text-body
                                            "><?php echo e(__('out of stock')); ?></div>
                                        <?php endif; ?>
                                        <?php if($popular_category_item->previous_price && $popular_category_item->previous_price !=0): ?>
                                        <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($popular_category_item)); ?></div>
                                        <?php endif; ?>
                                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$popular_category_item->thumbnail)); ?>" alt="Product">
                                            <div class="product-button-group">
                                                <a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$popular_category_item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                                <a data-target="<?php echo e(route('fornt.compare.product',$popular_category_item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                                <?php echo $__env->make('includes.item_footer',['sitem'=>$popular_category_item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>
                                    <div class="product-card-body">
                                        <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$popular_category_item->category->slug); ?>"><?php echo e($popular_category_item->category->name); ?></a></div>
                                        <h3 class="product-title"><a href="<?php echo e(route('front.product',$popular_category_item->slug)); ?>">
                                            <?php echo e(strlen(strip_tags($popular_category_item->name)) > 35 ? substr(strip_tags($popular_category_item->name), 0, 35) : strip_tags($popular_category_item->name)); ?>

                                        </a></h3>
                                        <div class="rating-stars">
                                        <i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i>
                                        </div>
                                        <h4 class="product-price">
                                            <?php if($popular_category_item->previous_price != 0): ?>
                                            <del><?php echo e(PriceHelper::setPreviousPrice($popular_category_item->previous_price)); ?></del>
                                            <?php endif; ?>
                                            <?php echo e(PriceHelper::grandCurrencyPrice($popular_category_item)); ?>

                                            </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($setting->is_three_c_b_second == 0): ?>
        <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_secend['url1']); ?>" class="genius-banner">
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$banner_secend['img1'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_secend['subtitle1'])): ?>
                                    <p><?php echo e($banner_secend['subtitle1']); ?></p>
                                <?php endif; ?>

                                <?php if(isset($banner_secend['title1'])): ?>
                                    <h4><?php echo e($banner_secend['title1']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_secend['url2']); ?>" class="genius-banner">
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$banner_secend['img2'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_secend['subtitle2'])): ?>
                                    <p><?php echo e($banner_secend['subtitle2']); ?></p>
                                <?php endif; ?>

                                <?php if(isset($banner_secend['title2'])): ?>
                                    <h4> <?php echo e($banner_secend['title2']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_secend['url3']); ?>" class="genius-banner">
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$banner_secend['img3'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_secend['subtitle3'])): ?>
                                    <p><?php echo e($banner_secend['subtitle3']); ?> </p>
                                <?php endif; ?>

                                <?php if(isset($banner_secend['title3'])): ?>
                                    <h4><?php echo e($banner_secend['title3']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($setting->is_highlighted == 0): ?>
        <section class="selected-product-section speacial-product-sec mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="links">
                                <a data-href="<?php echo e(route('front.get.product','feature')); ?>" data-target="type_product_view" href="javascript:;" class="product_get active"><?php echo e(__('Featured')); ?></a>
                                <a data-href="<?php echo e(route('front.get.product','best')); ?>" data-target="type_product_view" class="product_get" href="javascript:;"><?php echo e(__('Best Seller')); ?></a>
                                <a data-href="<?php echo e(route('front.get.product','top')); ?>" data-target="type_product_view" class="product_get" href="javascript:;"><?php echo e(__('Top Rated')); ?></a>
                                <a data-href="<?php echo e(route('front.get.product','new')); ?>" data-target="type_product_view" class="product_get" href="javascript:;"><?php echo e(__('New Product')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="type_product_view d-none">
                        <img  src="<?php echo e(asset('assets/images/ajax_loader.gif')); ?>" alt="">
                    </div>
                    <div class="col-lg-12" id="type_product_view">

                        <div class="features-slider  owl-carousel" >
                            <?php $__currentLoopData = $products->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_type == 'feature'): ?>
                                    <div class="slider-item">
                                        <div class="product-card ">
                                            <div class="product-thumb">
                                                <?php if(!$item->is_stock()): ?>
                                                    <div class="product-badge bg-secondary border-default text-body
                                                    "><?php echo e(__('out of stock')); ?></div>
                                                <?php endif; ?>
                                                <?php if($item->previous_price && $item->previous_price !=0): ?>
                                                <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($item)); ?></div>
                                                <?php endif; ?>
                                                <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product">
                                                <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                                    <a data-target="<?php echo e(route('fornt.compare.product',$item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                                    <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                            <div class="product-card-inner">
                                            <div class="product-card-body">
                                                <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$item->category->slug); ?>"><?php echo e($item->category->name); ?></a></div>
                                                <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                                    <?php echo e(strlen(strip_tags($item->name)) > 35 ? substr(strip_tags($item->name), 0, 35) : strip_tags($item->name)); ?>

                                                </a></h3>
                                                <div class="rating-stars">
                                                    <?php echo renderStarRating($item->reviews->avg('rating')); ?>

                                                </div>
                                                <h4 class="product-price">
                                                <?php if($item->previous_price != 0): ?>
                                                <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                                                <?php endif; ?>
                                                <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                                                </h4>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($extra_settings->is_t1_falsh == 0): ?>
    <div class="flash-sell-new-section mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h2 class="h3"><?php echo e(__('Flash Deal')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="flash-deal-slider owl-carousel" >
                            <?php $__currentLoopData = $products->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->is_type == 'flash_deal' && $item->date != null): ?>
                                <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                            <?php if(!$item->is_stock()): ?>
                                            <div class="product-badge bg-secondary border-default text-body
                                            "><?php echo e(__('out of stock')); ?></div>
                                            <?php endif; ?>
                                            <?php if($item->previous_price && $item->previous_price !=0): ?>
                                            <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($item)); ?></div>
                                            <?php endif; ?>
                                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product">
                                            <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                                <a data-target="<?php echo e(route('fornt.compare.product',$item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                                <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$item->category->slug); ?>"><?php echo e($item->category->name); ?></a></div>
                                                <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                                    <?php echo e(strlen(strip_tags($item->name)) > 50 ? substr(strip_tags($item->name), 0, 50) : strip_tags($item->name)); ?>

                                                </a></h3>
                                                <div class="rating-stars">
                                                    <?php echo renderStarRating($item->reviews->avg('rating')); ?>

                                                </div>
                                                <h4 class="product-price">
                                                <?php if($item->previous_price != 0): ?>
                                                <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                                                <?php endif; ?>

                                                <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                                                </h4>
                                                <?php if(date('d-m-y') != \Carbon\Carbon::parse($item->date)->format('d-m-y')): ?>
                                                <div class="countdown countdown-alt mb-3" data-date-time="<?php echo e($item->date); ?>">
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if($setting->is_two_column_category == 0): ?>
        <div class="flash-sell-area mt-50">
            <div class="container">
                <div class="row gx-3 justify-content-center">
                    <?php $__currentLoopData = $two_column_categoriess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $two_column_key => $two_column_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e($two_column_category['name']->name); ?></h2>
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                <?php $__currentLoopData = $two_column_categoriess[$two_column_key]['items']->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $two_column_category_itemt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="slider-item">
                                        <?php $__currentLoopData = $two_column_category_itemt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $two_column_category_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product-card p-col">
                                            <a class="product-thumb" href="<?php echo e(route('front.product',$two_column_category_item->slug)); ?>">
                                                <?php if(!$two_column_category_item->is_stock()): ?>
                                                    <div class="product-badge bg-secondary border-default text-body
                                                    "><?php echo e(__('out of stock')); ?></div>
                                                    <?php endif; ?>

                                                <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$two_column_category_item->thumbnail)); ?>" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="<?php echo e(route('front.product',$two_column_category_item->slug)); ?>">
                                                    <?php echo e(strlen(strip_tags($two_column_category_item->name)) > 40 ? substr(strip_tags($two_column_category_item->name), 0, 40) : strip_tags($two_column_category_item->name)); ?>

                                                </a></h3>
                                                <div class="rating-stars">
                                                    <?php echo renderStarRating($two_column_category_item->reviews->avg('rating')); ?>

                                                </div>
                                                <h4 class="product-price">
                                                <?php if($two_column_category_item->previous_price != 0): ?>
                                                <del><?php echo e(PriceHelper::setPreviousPrice($two_column_category_item->previous_price)); ?></del>
                                                <?php endif; ?>
                                                    <?php echo e(PriceHelper::grandCurrencyPrice($two_column_category_item)); ?>

                                                </h4>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($setting->is_two_c_b == 0): ?>
        <div class="bannner-section mt-50">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-6">
                        <a href="<?php echo e($banner_third['url1']); ?>" class="genius-banner">
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$banner_third['img1'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_third['subtitle1'])): ?>
                                    <p><?php echo e($banner_third['subtitle1']); ?></p>
                                <?php endif; ?>
                                <?php if(isset($banner_third['title1'])): ?>
                                    <h4><?php echo e($banner_third['title1']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo e($banner_third['url2']); ?>" class="genius-banner">
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$banner_third['img2'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_third['subtitle2'])): ?>
                                    <p><?php echo e($banner_third['subtitle2']); ?> </p>
                                <?php endif; ?>
                                <?php if(isset($banner_third['title2'])): ?>
                                    <h4><?php echo e($banner_third['title2']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($setting->is_featured_category == 0): ?>
        <section class="selected-product-section featured_cat_sec sps-two mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e($feature_category_title); ?></h2>
                            <div class="links">
                                <?php $__currentLoopData = $feature_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="category_get <?php echo e($loop->first ? 'active' : ''); ?>" data-target="feature_category_view"  data-href="<?php echo e(route('front.popular.category',[$feature_category->slug,'feature_category','normal'])); ?>" href="javascript:;" class="<?php echo e($loop->first ? 'active' : ''); ?>"><?php echo e($feature_category->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature_category_view d-none">
                    <img  src="<?php echo e(asset('assets/images/ajax_loader.gif')); ?>" alt="">
                </div>
                <div class="row g-3" id="feature_category_view">
                    <?php $__currentLoopData = $feature_category_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_category_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-gd">
                        <div class="product-card">
                            <div class="product-thumb" >

                                <?php if(!$feature_category_item->is_stock()): ?>
                                    <div class="product-badge bg-secondary border-default text-body
                                    "><?php echo e(__('out of stock')); ?></div>
                                <?php endif; ?>
                                <?php if($feature_category_item->previous_price && $feature_category_item->previous_price !=0): ?>
                                <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($feature_category_item)); ?></div>
                                <?php endif; ?>
                                    <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$feature_category_item->thumbnail)); ?>" alt="Product">
                                    <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$feature_category_item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                        <a data-target="<?php echo e(route('fornt.compare.product',$feature_category_item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>

                                        <?php echo $__env->make('includes.item_footer',['sitem'=>$feature_category_item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </div>
                            </div>
                            <div class="product-card-body">
                                <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$feature_category_item->category->slug); ?>"><?php echo e($feature_category_item->category->name); ?></a></div>
                                <h3 class="product-title"><a href="<?php echo e(route('front.product',$feature_category_item->slug)); ?>">
                                    <?php echo e(strlen(strip_tags($feature_category_item->name)) > 35 ? substr(strip_tags($feature_category_item->name), 0, 35) : strip_tags($feature_category_item->name)); ?>

                                </a></h3>
                                <div class="rating-stars">
                                <i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i>
                                </div>
                                <h4 class="product-price">
                                    <?php if($feature_category_item->previous_price != 0): ?>
                                    <del><?php echo e(PriceHelper::setPreviousPrice($feature_category_item->previous_price)); ?></del>
                                    <?php endif; ?>
                                    <?php echo e(PriceHelper::grandCurrencyPrice($feature_category_item)); ?>

                                    </h4>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($setting->is_blogs == 0): ?>
        <div class="blog-section-h page_section mt-50 mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e(__('Our Blog')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="home-blog-slider owl-carousel">
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="slider-item">
                                    <a href="<?php echo e(route('front.blog.details',$post->slug)); ?>" class="blog-post">
                                        <div class="post-thumb">
                                            <img class="lazy" data-src="<?php echo e(asset('assets/images/' . json_decode($post->photo, true)[array_key_first(json_decode($post->photo, true))])); ?>"
                                                alt="Blog Post">
                                            </div>
                                        <div class="post-body">

                                            <h3 class="post-title"> <?php echo e(strlen(strip_tags($post->title)) > 55 ? substr(strip_tags($post->title), 0, 55) : strip_tags($post->title)); ?>

                                            </h3>
                                            <ul class="post-meta">

                                                <li><i class="icon-user"></i><?php echo e(__('Admin')); ?></li>
                                                <li><i class="icon-clock"></i><?php echo e(date('jS F, Y', strtotime($post->created_at))); ?></li>
                                            </ul>
                                            <p><?php echo e(strlen(strip_tags($post->details)) > 120 ? substr(strip_tags($post->details), 0, 120) : strip_tags($post->details)); ?>

                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($setting->is_popular_brand == 0): ?>
        <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e(__('Popular Brands')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <a class="text-center" href="<?php echo e(route('front.catalog') . '?brand=' . $brand->slug); ?>">
                                    <img class="d-block hi-50 lazy"
                                    data-src="<?php echo e(asset('assets/images/' . $brand->photo)); ?>"
                                        alt="<?php echo e($brand->name); ?>" title="<?php echo e($brand->name); ?>">
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\demo\bs\well-known\core\resources\views/front/themes/theme1.blade.php ENDPATH**/ ?>