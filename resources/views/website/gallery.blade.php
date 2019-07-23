@extends('website.layouts.layouts')
@section('title', 'Home')
@section('customizedStyle')
@endsection
@section('customizedScript')
@endsection
@section('content')
    @include('website.layouts.header')



    <div class="gallery-page">
        <!-- start gallery section -->
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
        <!-- end gallery section -->
    </div>



    @include('website.layouts.footer')
@endsection
