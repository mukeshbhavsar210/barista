@extends('front.layouts.app')

@section('content')

<section class="about-section section-padding" id="section_2">
<div class="section-overlay"></div>
<div class="container">
    <div class="row align-items-center">

        <div class="col-lg-6 col-12">
            <div class="ratio ratio-1x1">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>

                <div class="about-video-info d-flex flex-column">
                    <h4 class="mt-auto">We Started Since 2009.</h4>

                    <h4>Best Cafe in Klang.</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
            <em class="text-white">Barista.co</em>
            <h2 class="text-white mb-3">Cafe KL</h2>
            <p class="text-white">The café had been in the town for as long as anyone could remember, and it had become a beloved institution among the locals.</p>
            <p class="text-white">The café was run by a friendly and hospitable couple, Mr. and Mrs. Johnson. Barista Cafe is free Bootstrap 5 HTML layout provided by <a rel="nofollow" href="https://www.tooplate.com" target="_blank">Tooplate</a>.</p>
            <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet Baristas</a>
        </div>
    </div>
</div>
</section>




<section class="barista-section section-padding section-bg" id="barista-team">
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
            <em class="text-white">Creative Baristas</em>

            <h2 class="text-white">Meet People</h2>
        </div>

        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="team-block-wrap">
                <div class="team-block-info d-flex flex-column">
                    <div class="d-flex mt-auto mb-3">
                        <h4 class="text-white mb-0">Steve</h4>
                        <p class="badge ms-4"><em>Boss</em></p>
                    </div>

                    <p class="text-white mb-0">your favourite coffee daily lives tempor.</p>
                </div>

                <div class="team-block-image-wrap">
                    <img src="{{ 'assets/images/team/portrait-elegant-old-man-wearing-suit.jpg' }}" src="" class="team-block-image img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="team-block-wrap">
                <div class="team-block-info d-flex flex-column">
                    <div class="d-flex mt-auto mb-3">
                        <h4 class="text-white mb-0">Sandra</h4>

                        <p class="badge ms-4"><em>Manager</em></p>
                    </div>

                    <p class="text-white mb-0">your favourite coffee daily lives.</p>
                </div>

                <div class="team-block-image-wrap">
                    <img src="images/team/cute-korean-barista-girl-pouring-coffee-prepare-filter-batch-brew-pour-working-cafe.jpg" class="team-block-image img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="team-block-wrap">
                <div class="team-block-info d-flex flex-column">
                    <div class="d-flex mt-auto mb-3">
                        <h4 class="text-white mb-0">Jackson</h4>

                        <p class="badge ms-4"><em>Senior</em></p>
                    </div>

                    <p class="text-white mb-0">your favourite coffee daily lives.</p>
                </div>

                <div class="team-block-image-wrap">
                    <img src="images/team/small-business-owner-drinking-coffee.jpg" class="team-block-image img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="team-block-wrap">
                <div class="team-block-info d-flex flex-column">
                    <div class="d-flex mt-auto mb-3">
                        <h4 class="text-white mb-0">Michelle</h4>

                        <p class="badge ms-4"><em>Barista</em></p>
                    </div>

                    <p class="text-white mb-0">your favourite coffee daily consectetur.</p>
                </div>

                <div class="team-block-image-wrap">
                    <img src="images/team/smiley-business-woman-working-cashier.jpg" class="team-block-image img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
</section>


<section class="menu-section section-padding" id="section_3">
<div class="container">
    <div class="row">  
        
        @if ($categories->isNotEmpty())
            @foreach ($categories as $category)        
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="menu-block-wrap">
                        <div class="text-center mb-4 pb-lg-2">
                            <em class="text-white">Delicious Menu</em>
                            <h4 class="text-white">{{ $category->name }}</h4>
                            {{-- <h4 class="text-white">{{ $category_name->$category->name }}</h4> --}}
                        </div>
                        @if ($items->isNotEmpty())
                            @foreach ($items as $item)
                                <div class="menu-block my-4">
                                    <div class="d-flex">
                                        <h6>{{ $item->name }} 
                                            @if($item->recommended == 1)
                                                <span class="badge ms-3">Recommend</span>
                                            @endif
                                        </h6>
                                        <span class="underline"></span>
                                        <strong class="text-white ms-auto"><del>
                                            @if($item->offerprice > 0)
                                                $
                                            @endif
                                            
                                            {{ $item->offerprice }}</del></strong>        
                                        <strong class="ms-auto">${{ $item->price }}</strong>
                                    </div>
                
                                    <div class="border-top mt-2 pt-2">
                                        <small>{{ $item->description }}</small>
                                    </div>
                                </div>                   
                            @endforeach
                        @else
                            
                        @endif
                    </div>
                </div>
        @endforeach
        @else
            
        @endif

        {{-- <div class="col-lg-6 col-12">
            <div class="menu-block-wrap">
                <div class="text-center mb-4 pb-lg-2">
                    <em class="text-white">Favourite Menu</em>
                    <h4 class="text-white">Coffee</h4>
                </div>

                <div class="menu-block">
                    <div class="d-flex">
                        <h6>Latte</h6>
                    
                        <span class="underline"></span>

                        <strong class="text-white ms-auto"><del>$12.50</del></strong>

                        <strong class="ms-2">$7.50</strong>
                    </div>

                    <div class="border-top mt-2 pt-2">
                        <small>Fresh brewed coffee and steamed milk</small>
                    </div>
                </div>

                <div class="menu-block my-4">
                    <div class="d-flex">
                        <h6>
                            White Coffee
                            <span class="badge ms-3">Recommend</span>
                        </h6>
                    
                        <span class="underline"></span>

                        <strong class="ms-auto">$5.90</strong>
                    </div>

                    <div class="border-top mt-2 pt-2">
                        <small>Brewed coffee and steamed milk</small>
                    </div>
                </div>

                <div class="menu-block">
                    <div class="d-flex">
                        <h6>Chocolate Milk</h6>
                    
                        <span class="underline"></span>

                        <strong class="ms-auto">$5.50</strong>
                    </div>

                    <div class="border-top mt-2 pt-2">
                        <small>Rich Milk and Foam</small>
                    </div>
                </div>

                <div class="menu-block my-4">
                    <div class="d-flex">
                        <h6>Greentea</h6>
                    
                        <span class="underline"></span>

                        <strong class="ms-auto">$7.50</strong>
                    </div>

                    <div class="border-top mt-2 pt-2">
                        <small>Fresh brewed coffee and steamed milk</small>
                    </div>
                </div>

                <div class="menu-block">
                    <div class="d-flex">
                        <h6>Dark Chocolate</h6>
                    
                        <span class="underline"></span>

                        <strong class="ms-auto">$7.25</strong>
                    </div>

                    <div class="border-top mt-2 pt-2">
                        <small>Rich Milk and Foam</small>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>
</section>


<section class="reviews-section section-padding section-bg" id="section_4">
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
            <em class="text-white">Reviews by Customers</em>

            <h2 class="text-white">Testimonials</h2>
        </div>

        <div class="timeline">
            <div class="timeline-container timeline-container-left">
                <div class="timeline-content">
                    <div class="reviews-block">
                        <div class="reviews-block-image-wrap d-flex align-items-center">
                            <img src="images/reviews/young-woman-with-round-glasses-yellow-sweater.jpg" class="reviews-block-image img-fluid" alt="">

                            <div class="">
                                <h6 class="text-white mb-0">Sandra</h6>
                                <em class="text-white"> Customers</em>
                            </div>
                        </div>

                        <div class="reviews-block-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="d-flex border-top pt-3 mt-4">
                                <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                <div class="reviews-group ms-auto">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-container timeline-container-right">
                <div class="timeline-content">
                    <div class="reviews-block">
                        <div class="reviews-block-image-wrap d-flex align-items-center">
                            <img src="images/reviews/senior-man-white-sweater-eyeglasses.jpg" class="reviews-block-image img-fluid" alt="">

                            <div class="">
                                <h6 class="text-white mb-0">Don</h6>
                                <em class="text-white"> Customers</em>
                            </div>
                        </div>

                        <div class="reviews-block-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="d-flex border-top pt-3 mt-4">
                                <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                <div class="reviews-group ms-auto">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-container timeline-container-left">
                <div class="timeline-content">
                    <div class="reviews-block">
                        <div class="reviews-block-image-wrap d-flex align-items-center">
                            <img src="images/reviews/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg" class="reviews-block-image img-fluid" alt="">

                            <div class="">
                                <h6 class="text-white mb-0">Olivia</h6>
                                <em class="text-white"> Customers</em>
                            </div>
                        </div>

                        <div class="reviews-block-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="d-flex border-top pt-3 mt-4">
                                <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                <div class="reviews-group ms-auto">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>


<section class="contact-section section-padding" id="section_5">
<div class="container">
    <div class="row">   

        <div class="col-lg-12 col-12">
            <em class="text-white">Say Hello</em>
            <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
        </div>

        <div class="col-lg-6 col-12">
            <form action="#" method="post" class="custom-form contact-form" role="form">

            <div class="row">
                
                <div class="col-lg-6 col-12">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                    <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                </div>

                <div class="col-lg-6 col-12">
                    <label for="email" class="form-label">Email Address</label>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                </div>

                <div class="col-12">
                    <label for="message" class="form-label">How can we help?</label>

                    <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>
                    
                </div>
            </div>

            <div class="col-lg-5 col-12 mx-auto mt-3">
                <button type="submit" class="form-control">Send Message</button>
            </div>
        </form>
        </div>

        <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.668141741662!2d72.81814769288509!3d19.043340656729775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c994f34a7355%3A0x2680d63a6f7e33c2!2sLover%20Point!5e1!3m2!1sen!2sth!4v1692722771770!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
        </div>

    </div>
</div>
</section>
    
@endsection
