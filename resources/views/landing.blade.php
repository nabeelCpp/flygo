@extends('layouts.front')
@section('content')
    <section class="hero" id="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
                <div class="container">
                    <h1>{{__("Your Journey Begins")}}</h1>
                    <p>{{__("Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.")}}</p>
                </div>
                
            </div>
            <div class="swiper-slide slide1">
                <div class="container">
                    <h1>{{__("Your Journey Begins")}} 2</h1>
                    <p>{{__("Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.")}}</p>
                </div>
            </div>
            <div class="swiper-slide slide1">
                <div class="container">
                    <h1>{{__("Your Journey Begins")}} 3</h1>
                    <p>{{__("Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.")}}</p>
                </div>
            </div>
            </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="sec-heading">{{__("why we are the best")}}<span>{{__("Services")}}</span></h2>
                        <p>{{__("Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.")}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-inner">
                            <div class="service-num">
                                <div class="service-icon"><img src="images/hotel.png" alt=""></div>
                                <div class="service-name"><span>01</span>{{__("Luxury Hotels")}}</div>
                            </div>
                            <p>{{__("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-inner">
                            <div class="service-num">
                                <div class="service-icon"><img src="images/car-icon.png" alt=""></div>
                                <div class="service-name"><span>02</span>{{__("Transports")}}</div>
                            </div>
                            <p>{{__("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-inner">
                            <div class="service-num">
                                <div class="service-icon"><img src="images/ticket.png" alt=""></div>
                                <div class="service-name"><span>03</span>{{__("Flight Tickets")}}</div>
                            </div>
                            <p>{{__("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")}}</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="deals" id="deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>{{__("Last Minute Deals")}}</h3>
                </div>
                <div class="col-lg-4">
                    <div class="deal-inner">
                        <img src="images/shanghai.jpg" alt="">
                        <div class="row deal-text">
                            <div class="col-6">
                                <h4>{{__("Shanghai")}}</h4>
                                <p><small>{{__("First Class")}}</small></p>
                            </div>
                            <div class="col-6 text-end">
                                <p>{{__("Sar")}}2500</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="deal-inner">
                        <img src="images/taiwan.jpg" alt="">
                        <div class="row deal-text">
                            <div class="col-6">
                                <h4>{{__("Taiwan")}}</h4>
                                <p><small>{{__("First Class")}}</small></p>
                            </div>
                            <div class="col-6 text-end">
                                <p>{{__("Sar")}}2500</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="deal-inner">
                        <img src="images/sydney.jpg" alt="">
                        <div class="row deal-text">
                            <div class="col-6">
                                <h4>{{__("Sydney")}}</h4>
                                <p><small>{{__("First Class")}}</small></p>
                            </div>
                            <div class="col-6 text-end">
                                <p>{{__("Sar")}}2500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="places" id="package">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/map.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h5>Popular Tours Places</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
                        <ul>
                            <li><a href="#">Africa <span>(9)</span></a></li>
                            <li><a href="#">Asia <span>(4)</span></a></li>
                            <li><a href="#">Astralia <span>(5)</span></a></li>
                            <li><a href="#">Dubai <span>(2)</span></a></li>
                            <li><a href="#">Istambul <span>(11)</span></a></li>
                            <li><a href="#">Nrth America <span>(8)</span></a></li>
                            <li><a href="#">Paris <span>(3)</span></a></li>
                            <li><a href="#">Rome <span>(15)</span></a></li>
                            <li><a href="#">South America <span>(0)</span></a></li>
                        </ul>
                        <a href="#" class="btn btn-warning text-uppercase">All Destinations</a>
                </div>
            </div>
        </div>
    </section>

    <section class="nature" id="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a class="play-btn" href="#"><img src="images/play.png" alt=""></a>
                    
                    <h6>Feel the Nature</h6>
                    <p>You should never miss a chance to visit the nature and their local resturants</p>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-heading mb-6">Travel Most Popular Place <span>Destinations</span></h2>
                </div>
                <div class="col-12 position-relative">
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="deal-inner">
                                <img src="images/paris.jpg" alt="">
                                <div class="row deal-text">
                                    <div class="col-7">
                                        <h4>Paris</h4>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="rating">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-half.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="deal-inner">
                                <img src="images/hongkong.jpg" alt="">
                                <div class="row deal-text">
                                    <div class="col-7">
                                        <h4>Hong Kong</h4>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="rating">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-half.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="deal-inner">
                                <img src="images/london.jpg" alt="">
                                <div class="row deal-text">
                                    <div class="col-7">
                                        <h4>London</h4>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="rating">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-full.png" alt="">
                                            <img src="images/star-half.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-heading mb-6">Best Places photos<span>Gallerry</span></h2>
                </div>
            </div>
            <div class="row g-images">
                <div class="col-lg-3">
                    <a href="#"><img class="g-1" src="images/gallery1.jpg" alt=""><span><img class="marker" src="images/marker.png" alt="">Turkey</span></a>
                </div>
                <div class="col-lg-6">
                    <a class="mb-7" href="#"><img class="g-2" src="images/gallery2.jpg" alt=""><span><img class="marker" src="images/marker.png" alt="">Turkey</span></a>
                    <a href="#"><img class="g-2" src="images/gallery2.jpg" alt=""><span><img class="marker" src="images/marker.png" alt="">Turkey</span></a>
                </div>
                <div class="col-lg-3">
                    <a href="#"><img class="g-1" src="images/gallery1.jpg" alt=""><span><img class="marker" src="images/marker.png" alt="">Turkey</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="container">
            <div class="explore-inner">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6>Prepare yourself & let's explore the beauty of the world</h6>
                        <p>Start your digital adventure with forest</p>
                        <a href="#" class="btn btn-light">Get Started a Trip</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="airlines">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-heading mb-6">Booking with all major Airlines<span>Booking</span></h2>
                </div>
                <div class="col-12">
                    <ul class="airlines-list">
                        <li><a href="#"><img src="images/singapore-airlines.png" alt=""></a></li>
                        <li><a href="#"><img src="images/americanair.png" alt=""></a></li>
                        <li><a href="#"><img src="images/qatar.png" alt=""></a></li>
                        <li><a href="#"><img src="images/emirates.png" alt=""></a></li>
                        <li><a href="#"><img src="images/united.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-heading mb-6">If You Have any Question<br>Drop a Message<span>Contact</span></h2>
                </div>
            </div>
            <div class="form-box">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="" placeholder="Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="col-lg-4">
                            <input type="tel" class="form-control" id="" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-warning">Send Message</a>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
    </section>

    <section class="cloud py-100">
        <img src="images/cloud.png" alt="">
    </section>
@endsection