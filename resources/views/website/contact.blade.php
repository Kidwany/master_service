@extends('website.layouts.layouts')
@section('title', 'Home')
@section('customizedStyle')
@endsection
@section('customizedScript')
@endsection
@section('content')
    @include('website.layouts.header')



    <!-- contact us page -->
    <div class="contact-page">
        <div class="container">
            <div class="page-body">
                <ul class="branches">
                    <li>
                        <div class="branch-heading">
                            <p>
                                Nasr city branch
                            </p>
                        </div>
                        <div class="working-hours-phones">
                            <div class="working-hours">
                                <ul class="week-days">
                                    <li>
                                        <span>
                                            Sat
                                        </span>
                                        <span>
                                            8 AM - 9 PM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Sun
                                        </span>
                                        <span>
                                            8 AM - 9 PM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Mon
                                        </span>
                                        <span>
                                            8 AM - 9 PM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Tus
                                        </span>
                                        <span>
                                            8 AM - 9 PM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Wed
                                        </span>
                                        <span>
                                            8 AM - 9 PM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Thu
                                        </span>
                                        <span>
                                            Closed
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Fri
                                        </span>
                                        <span>
                                            Closed
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <ul class="phones">
                                <li>
                                    <span class="feather icon-phone-call"></span>
                                    <span>
                                        {{$footerContact->phone}}
                                    </span>
                                </li>
                                @if($footerContact->phone_alt)
                                    <li>
                                        <span class="feather icon-phone-call"></span>
                                        <span>
                                        {{$footerContact->phone_alt}}
                                    </span>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <div class="location">
                            <span class="feather icon-map-pin"></span>
                            <span>
                                {{$footerContact->{'address_'.currentLang()} }}
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="form-wrapper">
                    <div class="form-heading">
                        <p>
                            {!! __('trans.contact') !!}Contact Us
                        </p>
                    </div>
                    @include('dashboard.layouts.messages')
                    <form action="{{url('message')}}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-div">
                            <input type="text" name="name" placeholder="{!! __('trans.form_name') !!}*" value="{{old('name')}}">
                            <div class="thin-line"></div>
                        </div>
                        <div class="form-div">
                            <input type="email" name="email" placeholder="{!! __('trans.email') !!}*" value="{{old('email')}}">
                            <div class="thin-line"></div>
                        </div>
                        <div class="form-div">
                            <input type="text" name="phone" placeholder="{!! __('trans.form_phone') !!}*" value="{{old('phone')}}">
                            <div class="thin-line"></div>
                        </div>
                        <div class="form-div">
                            <input type="text" name="title" id="" placeholder="{!! __('trans.') !!}Message title* " value="{{old('title')}}">
                            <div class="thin-line"></div>
                        </div>
                        <div class="form-div">
                            <textarea name="message" placeholder="{!! __('trans.message') !!}">{{old('message')}}</textarea>
                            <div class="thin-line"></div>
                        </div>
                        <button type="submit">
                            <span class="feather icon-send"></span>
                            <span>
                                {!! __('trans.send') !!}
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us page -->



    @include('website.layouts.footer')
@endsection
