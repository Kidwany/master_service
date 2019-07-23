<?php

namespace App\Http\Controllers;

use App\About;
use App\Album;
use App\Client;
use App\Contact;
use App\Gallery;
use App\Image;
use App\Message;
use App\Service;
use App\Slider;
use App\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class WebsitePagesController extends Controller
{
    public function index()
    {
        $clients = Client::with('image', 'client_'.currentLang())->get();
        $images = Gallery::with('image')->get();
        $slides = Slider::with('slider_'.currentLang(), 'image')->get();
        $testimonials = Testimonial::with('testimonial_'.currentLang())->limit(6)->orderBy('created_at' ,'desc')->get();
        return view('website.welcome', compact('clients', 'images', 'slides', 'testimonials'));
    }

    public function about()
    {
        $about = About::orderby('id', 'desc')->first();
        return view('website.about', compact('about'));
    }

    public function gallery()
    {
        $images = Gallery::with('image')->get();
        return view('website.gallery', compact( 'images'));
    }

    public function albums($id)
    {
        $album = Album::find($id);
        $images =  Image::where('album_id', $id)->get();
        return view('website.albums', compact('album', 'images'));
    }

    public function contact()
    {
        $contact = Contact::orderby('id', 'desc')->first();
        return view('website.contact', compact('contact'));
    }

    public function message(Request $request)
    {
        $input = Input::get();
        $this->validate($request,[
            'email'         => 'bail|required|email|max:100',
            'phone'         => 'bail|required|min:8|max:14',
            'title'         => 'bail|required|max:150',
            'name'          => 'bail|required|max:100',
            'message'       => 'bail|required|min:30|max:500',
        ], [], [
            'email'         => 'Email',
            'phone'         => 'Phone',
            'name'          => 'Name ',
            'message'       => 'Message',
        ]);

        $message = new Message;
        $message->name = $input['name'];
        $message->email = $input['email'];
        $message->phone = $input['phone'];
        $message->title = $input['title'];
        $message->message = $input['message'];

        $message->save();
        Session::flash('create', __('trans.thanks') . $message->name .  __('trans.thanks_msg'));

        return redirect('contact');
    }
/*
    public function service()
    {
        $shows = Show::with('ThumbImg', 'mainImg')->get();
        return view('website.shows', compact('shows'));
    }*/

    public function serviceDetails($id)
    {
        $service = Service::with('image', 'service_'.currentLang())->find($id);
        return view('website.service_details', compact('service'));
    }

//    public function sponsors()
//    {
//        $sponsors = Sponsor::with('image')->get();
//        return view('website.sponsors', compact('sponsors'));
//    }
}

























