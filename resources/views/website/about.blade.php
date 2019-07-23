@extends('website.layouts.layouts')
@section('title', 'Home')
@section('customizedStyle')
@endsection
@section('customizedScript')
@endsection
@section('content')
    @include('website.layouts.header')

    <!-- about us page -->
    <div class="about-page">
        <div class="page-heading">
            <p>
                About Master Service
            </p>
        </div>
        <div class="page-body">
            <ul class="main-section-ul">
                <li>
                    <div class="li-img">
                        <img src="{{asset($about->missionImage->path)}}" alt="img">
                    </div>
                    <div class="li-text">
                        <div class="text-heading">
                            <p>
                                Our Mission
                            </p>
                        </div>
                        <ul class="inside-ul">
                            <li>
                                <span class="lnr lnr-checkmark-circle"></span>
                                <p>
                                    {{$about->{'about_'.currentLang()}->mission }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="li-img">
                        <img src="{{asset($about->visionImage->path)}}" alt="img">
                    </div>
                    <div class="li-text">
                        <div class="text-heading">
                            <p>
                                Our Vision
                            </p>
                        </div>
                        <ul class="inside-ul">
                            <li>
                                <span class="lnr lnr-checkmark-circle"></span>
                                <p>
                                    {{$about->{'about_'.currentLang()}->vision }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="li-img">
                        <img src="{{asset($about->valuesImage->path)}}" alt="img">
                    </div>
                    <div class="li-text">
                        <div class="text-heading">
                            <p>
                                Our Values
                            </p>
                        </div>
                        <ul class="inside-ul">
                            <li>
                                <span class="lnr lnr-checkmark-circle"></span>
                                <p>
                                    {{$about->{'about_'.currentLang()}->values }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- about us page -->


    @include('website.layouts.footer')
@endsection
