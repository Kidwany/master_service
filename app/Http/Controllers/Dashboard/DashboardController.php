<?php

namespace App\Http\Controllers\Dashboard;

use App\Classes;
use App\Client;
use App\Message;
use App\Service;
use App\Student;
use App\Subject;
use App\Teacher;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /*Return Index Page*/
    public function index()
    {
        $servicesCount = Service::all()->count();
        $clientsCount = Client::all()->count();
        $messagesCount = Message::all()->count();
        $testimonialsCount = Testimonial::all()->count();
        $messages = Message::all();
        return view('dashboard.welcome', compact('servicesCount', 'clientsCount', 'messagesCount', 'messages', 'testimonialsCount'));
    }


}
