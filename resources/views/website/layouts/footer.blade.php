<!-- start all footer -->
<footer>
    <div class="top-footer">
        <div class="container">

            <div class="section-one">
                <div class="section-body">
                    <a href="{{url('/')}}" class="logo-img">
                        <img src="{{asset($setting->image->path)}}" alt="img">
                    </a>
                    <div class="text">
                        <p>
                            {{str_limit($footerAbout->{'about_'.currentLang()}->description, 200, '...') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-two">
                <div class="section-heading">
                    <p>
                        Quick links
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <li>
                            <a href="{{url('/')}}">
                                <span>
                                    Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('gallery')}}">
                                <span>
                                    Gallery
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                                <span>
                                    Contact Us
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">
                                <span>
                                    About Us
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-three">
                <div class="section-heading">
                    <p>
                        i          Contacts
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul contacts-wrapper">
                        <li>
                            <div class="phone">
                                <span>
                                    Phone
                                </span>
                                <div>
                                    <i class="feather icon-phone-call"></i>
                                    <p>
                                        {{$footerContact->phone}}
                                    </p>
                                </div>
                            </div>
                            <div class="address">
                                <span>
                                    Location
                                </span>
                                <div>
                                    <i class="feather icon-map-pin"></i>
                                    <p>
                                        {{$footerContact->{'address_'.currentLang()} }}
                                    </p>
                                </div>
                            </div>
                            <div class="email">
                                <span>
                                    Email Address
                                </span>
                                <div>
                                    <i class="feather icon-mail"></i>
                                    <p>
                                        {{$footerContact->email}}
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-four">
                <div class="section-heading">
                    <p>
                        News Letter
                    </p>
                    <p>
                        Subscribe To ACDS news letter
                    </p>
                </div>
                <div class="section-body">
                    <div class="news-letter">
                        <form action="">
                            <input type="email" placeholder="Email Address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>

                    <ul class="social-links">
                        @if($footerContact->facebook)
                            <li>
                                <a href="{{url($footerContact->facebook)}}">
                                    <i class="feather icon-facebook"></i>
                                </a>
                            </li>
                        @endif
                        @if($footerContact->twitter)
                            <li>
                                <a href="{{url($footerContact->twitter)}}">
                                    <i class="feather icon-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if($footerContact->instagram)
                            <li>
                                <a href="{{url($footerContact->instagram)}}">
                                    <i class="feather icon-instagram"></i>
                                </a>
                            </li>
                        @endif
                            @if($footerContact->youtube)
                            <li>
                                <a href="{{url($footerContact->youtube)}}">
                                    <i class="feather icon-youtube"></i>
                                </a>
                            </li>
                        @endif





                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container">
            <p>
                <!-- 2019 &copy; جميع الحقوق محفوظة لشركة بى جروب -->
                2019 &copy Begroup All rights reserved
            </p>
        </div>
    </div>
</footer>
<!-- end all footer -->
