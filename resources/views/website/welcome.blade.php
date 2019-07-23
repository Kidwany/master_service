@extends('website.layouts.layouts')
@section('title', 'Home')
@section('content')
    @include('website.layouts.header')

    <!-- start home main slider -->
    <div class="swiper-container home-main-slider">
        <div class="swiper-wrapper">
            @if($slides)
                @foreach($slides as $slide)
                    <div class="swiper-slide">
                        <div class="slider-img">
                            <img src="{{asset($slide->image->path)}}" alt="img">
                        </div>
                        <div class="slider-text">
                            <div class="loopy-div"></div>
                            <div class="text-buttons">
                                <div class="text">
                                    <div class="typed-strings-1">
                                        <p>
                                            {{$slide->{'slider_'.currentLang()}->title}}
                                        </p>
                                    </div>
                                    <div class="typed-strings-2">
                                        <p>
                                            {{$slide->{'slider_'.currentLang()}->description}}|
                                        </p>
                                    </div>
                                    <p class="typed-p1"></p>
                                    <p class="typed-p2"></p>
                                </div>
                                <div class="buttons">
                                    <a href="#">
                                        <i class="feather icon-download"></i>
                                        <span>
                                    {{$slide->{'slider_'.currentLang()}->button}}
                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            {{--<div class="swiper-slide">
                <div class="slider-img">
                    <img src="./images/home-main-slides/slide-2.jpg" alt="img">
                </div>
                <div class="slider-text">
                    <div class="loopy-div"></div>
                    <div class="text-buttons">
                        <div class="text">
                            <div class="typed-strings-1">
                                <p>
                                    New Banking
                                </p>
                            </div>
                            <div class="typed-strings-2">
                                <p>
                                    Better Master Services For Better World|
                                </p>
                            </div>
                            <p class="typed-p1"></p>
                            <p class="typed-p2"></p>
                        </div>
                        <div class="buttons">
                            <a href="#">
                                <i class="feather icon-download"></i>
                                <span>
                                    download brochure
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-img">
                    <img src="./images/home-main-slides/slide-3.jpg" alt="img">
                </div>
                <div class="slider-text">
                    <div class="loopy-div"></div>
                    <div class="text-buttons">
                        <div class="text">
                            <div class="typed-strings-1">
                                <p>
                                    New Banking
                                </p>
                            </div>
                            <div class="typed-strings-2">
                                <p>
                                    Better Master Services For Better World|
                                </p>
                            </div>
                            <p class="typed-p1"></p>
                            <p class="typed-p2"></p>
                        </div>
                        <div class="buttons">
                            <a href="#">
                                <i class="feather icon-download"></i>
                                <span>
                                    download brochure
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>--}}

        </div>

        <div class="mfa-swiper-buttons">
            <div class="swiper-button-prev home-main-slider-prev">
                <span class="feather icon-arrow-left"></span>
            </div>
            <div class="swiper-button-next home-main-slider-next">
                <span class="feather icon-arrow-right"></span>
            </div>
        </div>

        <div class="swiper-pagination home-main-slider-pagination"></div>
    </div>
    <!-- end home main slider -->


    <!-- start home about section -->
    <div class="home-about-section">
        <div class="img-div">
            <img src="{{$footerAbout->aboutImage->path}}" alt="img">
        </div>
        <div class="section-text">
            <div class="section-heading">
                {!! __('trans.about_title') !!}
            </div>
            <div class="text">
                <p>
                   {{$footerAbout->{'about_'.currentLang()}->description }}
                </p>
            </div>
        </div>
    </div>
    <!-- end home about section -->


    <!-- start services section -->
    <div class="home-services-section">
        <div class="section-heading">
            <p>
                {!! __('trans.services_title') !!}
            </p>
        </div>

        <div class="section-body">
            <ul class="main-section-ul">
                @if($services)
                    @foreach($services as $service)
                        <li data-aos="zoom-in" data-aos-duration="1500">
                            <a href="{{url('serviceDetails/'.$service->id)}}">
                                <div class="service-img">
                                    <img src="{{asset($service->image->path)}}" alt="img">
                                </div>
                                <div class="service-body">
                                    <div class="service-heading">
                                        <p>
                                            {{$service->{'service_'.currentLang()}->title }}
                                        </p>
                                    </div>
                                    <div class="service-text">
                                        <p>
                                            {{str_limit($service->{'service_'.currentLang()}->description, 200, '...')  }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>

    </div>
    <!-- end services section -->


    <!-- star home counter section -->
    <!-- <div class="home-counter-section" data-aos="fade-in" data-aos-duration="1500">
      <ul class="main-section-ul">
        <li>
          <div class="counter-img">
            <img src="./images/counter/building.png" alt="img">
          </div>
          <div class="number-div">
            <span class="counter-number">
              932
            </span>
          </div>
          <div class="counter-title">
            <p>
              Completed Projects
            </p>
          </div>
        </li>
        <li>
          <div class="counter-img">
            <img src="./images/counter/projects.png" alt="img">
          </div>
          <div class="number-div">
            <span class="counter-number">
              1000
            </span>
          </div>
          <div class="counter-title">
            <p>
              Company Employee
            </p>
          </div>
        </li>
        <li>
          <div class="counter-img">
            <img src="./images/counter/client.png" alt="img">
          </div>
          <div class="number-div">
            <span class="counter-number">
              24
            </span>
            <span>
              hr
            </span>
          </div>
          <div class="counter-title">
            <p>
              CUSTOMER SERVICE
            </p>
          </div>
        </li>
        <li>
          <div class="counter-img">
            <img src="./images/counter/happy.png" alt="img">
          </div>
          <div class="number-div">
            <span class="counter-number">
              1233
            </span>
          </div>
          <div class="counter-title">
            <p>
              Happy CLIENTS
            </p>
          </div>
        </li>
      </ul>
    </div> -->
    <!-- end home counter section -->



    <!-- star home counter section -->
    <div class="home-counter-section">
        <ul class="main-section-ul">
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{asset('website/images/counter/medal.png')}}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            15
                        </span>
                        <span>
                            Yr
                        </span>
                        <span class="feather icon-plus"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {!! __('trans.experience') !!}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{asset('website/images/counter/happy.png')}}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            310
                        </span>
                        <span class="feather icon-plus"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {!! __('trans.happy_clients') !!}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{asset('website/images/counter/staff.png')}}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            280
                        </span>
                        <span class="feather icon-plus"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {!! __('trans.staff') !!}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{asset('website/images/counter/projects.png')}}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            3201
                        </span>
                        <span class="feather icon-plus"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {!! __('trans.projects') !!}
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- end home counter section -->



    <!-- start gallery section -->
    <div class="home-gallery-section">
        <div class="gallery-layout">
            <div class="home-light-gallery">
                @if($images)
                    @foreach($images as $image)
                        <a href="{{asset($image->image->path)}}" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="{{asset($image->image->path)}}" />
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- end gallery section -->


    <!-- testmonials section -->
    <div class="testmonials-section">
        <div class="container">
            <div class="section-heading">
                <p>
                    {!! __('trans.testimonials_title') !!}
                </p>
            </div>
            <div class="swiper-container home-testmonials-slider">
                <div class="swiper-wrapper">
                    @if($testimonials)
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="slider-text">
                                    <div class="text">
                                        <p>
                                            {{$testimonial->{'testimonial_'.currentLang()}->text }}
                                        </p>
                                    </div>
                                    <div class="name">
                                        <p>
                                            {{$testimonial->{'testimonial_'.currentLang()}->username }}
                                        </p>
                                    </div>
                                </div>
                                <!-- quotes -->
                                <div class="quotes">
                                    <i class="la la-quote-right"></i>
                                    <!-- <i class="la la-quote-left"></i> -->
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="testmonials-slider-buttons">
                    <div class="swiper-button-prev testmonials-slider-prev">
                        <span class="feather icon-arrow-left"></span>
                    </div>
                    <div class="swiper-button-next testmonials-slider-next">
                        <span class="feather icon-arrow-right"></span>
                    </div>
                </div>

                <!-- <div class="swiper-pagination testmonials-slider-pagination"></div> -->
            </div>
        </div>
    </div>
    <!-- testmonicals section -->


    <!-- our clients section -->
    <div class="clients-section">
        <div class="section-heading">
            <p>
                {!! __('trans.clients_title') !!}
            </p>
        </div>
        <div class="swiper-container home-clients-slider">
            <div class="swiper-wrapper">
                @if($clients)
                    @foreach($clients as $client)
                        <div class="swiper-slide">
                            <div class="slider-img">
                                <img src="{{asset($client->image->path)}}" alt="img">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- <div class="clients-slider-buttons">
                <div class="swiper-button-prev clients-slider-prev">
                  <span class="feather icon-arrow-left"></span>
                </div>
                <div class="swiper-button-next clients-slider-next">
                  <span class="feather icon-arrow-right"></span>
                </div>
              </div> -->

            <!-- <div class="swiper-pagination testmonials-slider-pagination"></div> -->
        </div>
    </div>
    <!-- our clients section -->

    @include('website.layouts.footer')
@endsection
