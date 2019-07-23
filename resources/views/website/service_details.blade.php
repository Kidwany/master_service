@extends('website.layouts.layouts')
@section('title', 'Home')
@section('customizedStyle')
@endsection
@section('customizedScript')
@endsection
@section('content')
    @include('website.layouts.header')

    <!-- start details page -->
    <div class="details-page">
        <div class="page-body">
            <div class="container">
                <div class="body-images">
                    <div class="fotorama" data-fit="cover" data-nav="thumbs" data-allowfullscreen="true">
                        <a href="{{asset($service->image->path)}}">
                            <img src="{{asset($service->image->path)}}">
                        </a>
                        {{--<a href="./images/services/service-1/2.jpg">
                            <img src="./images/services/service-1/2.jpg">
                        </a>
                        <a href="./images/services/service-1/3.jpg">
                            <img src="./images/services/service-1/3.jpg">
                        </a>
                        <a href="./images/services/service-1/4.jpg">
                            <img src="./images/services/service-1/4.jpg">
                        </a>
                        <a href="./images/services/service-1/5.jpg">
                            <img src="./images/services/service-1/5.jpg">
                        </a>
                        <a href="./images/services/service-1/6.jpg">
                            <img src="./images/services/service-1/6.jpg">
                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="body-text">
                    <div class="main-heading" data-aos="fade-up" data-aos-duration="1500">
                        <p>
                           {{$service->{'service_'.currentLang()}->title }}
                        </p>

                        <p>
                            {{$service->{'service_'.currentLang()}->description }}
                        </p>
                    </div>

                   {{-- <div class="specifications" data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="title">
                            <span>
                                How it is done ?
                            </span>
                        </div>
                        <ul>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a quaerat cupiditate voluptate,
                                    corrupti ipsam facilis, esse tenetur sequi repellendus
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptate quisquam velit ducimus
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptatibus tempore laborum
                                    voluptates provident quaerat
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, expedita ratione laudantium neque
                                    illo beatae animi natus distinctio
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptate quisquam velit ducimus
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptatibus tempore laborum
                                    voluptates provident quaerat
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptate quisquam velit ducimus
                                </p>
                            </li>
                            <li>
                                <i class="feather icon-check-circle"></i>
                                <p>
                                    met consectetur adipisicing elit. Enim, expedita ratione laudantium neque
                                    illo beatae animi natus distinctio
                                </p>
                            </li>
                        </ul>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- end details page -->

    @include('website.layouts.footer')
@endsection
