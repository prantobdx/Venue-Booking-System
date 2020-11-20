@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="banner">
<div class="carousel" id="mainBnner">
    <div class="item"><img src="{{ asset('frontend/images/VENUE.jpg') }}" alt=""></div>
    <div class="item"><img src="{{ asset('frontend/images/banner-img/slider-img2.jpg') }}" alt=""></div>
    <div class="item"><img src="{{ asset('frontend/images/confrence-booking.jpg') }}" alt=""></div>
</div>
<div class="banner-nav">
    <div class="prev"><span class="icon icon-arrow-left"></span></div>
    <div class="next"><span class="icon icon-arrow-right"></span></div>
</div>

<div class="banner-text">
    <div class="search-title">
        <h1 style="color:yellow"> <span>Venue</span> is Ready  <span>For You</span></h1>
    </div>

    <div class="container">
    </div>
</div>
</section>
<section class="service-type">
<div class="container">
    <div class="heading">
        <div class="icon"><em class="icon icon-heading-icon"></em></div>
        <div class="text">
            <h2>Our Services</h2>
        </div>
        <div class="info-text">We Organize All Venue Carefully.</div>

        <div>
           <h5 style="color:Crimson">"Hey are you want to booking a venue for surprising event? We are commited to you to aranged your's needed venue very carefully and successfully! Hope you will be staisfied. Just Book an venue as your requirement then our team will handle everything"</h5></div>

       </div> 

   </div>
</div>
</section>
<section class="content">
<div class="container">
    <div class="home-event">
        <div class="heading">
            <div class="icon"><em class="icon icon-heading-icon"></em></div>
            <div class="text">
                <h2>Recent Posts</h2>
            </div>
            <div class="info-text">Here You will Find all New Venue details.Just click and know about the Venue as your requirement</div>
        </div>

       <div class="row">
            <div class="event-slider">
                @foreach(App\Venues::orderBy('id', 'desc')->limit(6)->get() as $venue)
                <div class="item">
                    <div class="event-box">
                        <div class="img img-fluid">
                            <a href="{{ url('venue-details',$venue->id) }}">
                                <img src="../images/venues_img/{{$venue->image}}" alt="">
                                <h4 class="capsan">
                                    <span>{{$venue->category_name}}</span>
                                </h4>
                            </a>
                        </div>
                        <div> {{ $venue->title }}</div>

                        <p>{{ $venue->sub_title }} </p>

                        <a href="{{ url('venue-details',$venue->id) }}">Readmore</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>

@endsection
