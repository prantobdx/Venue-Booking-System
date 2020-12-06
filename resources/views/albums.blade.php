@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<div class="blog-banner">
    <img src="{{ asset('frontend/images/banner-img/blog-bannerImg.jpg') }}" alt="">
    <div class="text">
        <h1>Our <span>Albums</span></h1>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="blog-page">
            <div class="row">   
                <div class="col-sm-8 col-md-9 col-lg-9">
                
                    <div class="blog-slide">
                        <div class="date-view">
                            <div class="date">Oct</div>
                            <div class="year">2020</div>
                        </div>
                        <div class="row">
                            <h2>Our experice with live image </h2>
                            <div class="sub-title">Arranging celebration</div>

                            <div class="img">
                            <img src="{{ asset('frontend/images/gallery-img/home2-galleryImg18.jpg') }}" alt="">
                            </div>
                            <!-- <p></p> -->
                        </div>
                    </div>
    


                     <div class="blog-slide">
                        
                        <div class="blog-info">
                            <h2>Lets See Most Popular Venues</h2>
                            <div class="sub-title">We always with you</div>
                            
                            <div class="youtube">
                           <iframe width="720" height="380" src="https://www.youtube.com/embed/oPAGje5dFRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                            
                            <div class="outher-link">
                                <ul>
                                    <li>It is just one of the venues
                                     example</li>
                                </ul>
                            </div>
                            <!-- <p></p> -->
                        </div></div>
                      

                        <div class="blog-slide pr-5">

                        <div class="date-view">
                            <div class="date">Dec</div>
                            <div class="year">2020</div>
                        </div>
                            <h2>Another amazing Venue image </h2>
                            <div class="sub-title">Arranging celebration</div>

                            <div class="img">
                            <img src="{{ asset('frontend/images/parallax-img/slogen-sectionBg.jpg') }}" alt="" height="350px" width="600">
                            </div>
                            <h4>This place is nutured beautifull.Many Programs are organized here successfully.</h4> 
                        </div>
                    </div>
     
                 


                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="right-blog">
                    <div class="popular-post">
                        <h3>Venues Categories</h3>
            
                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/event-img/story-img2.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/event-img/story-img1.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>
                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/gallery-img/home2-galleryImg17.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>
                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/gallery-img/home3-galleryImg9.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/gallery-img/home3-galleryImg5.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/gallery-img/service-gallerImg1.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/gallery-img/home3-galleryImg9.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/service-img/service-img6.png') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                         <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/service-img/service-img7.png') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/about-us/img7.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>
                        
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
