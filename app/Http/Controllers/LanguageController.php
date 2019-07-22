<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        session()->has('lang') ? session()->forget('lang') : '';

        if ($lang == 'en')
        {
            session()->put('lang', 'en');
        }

        elseif ($lang == 'nl')
        {
            session()->put('lang', 'nl');
        }

        else
        {
            session()->put('lang', 'ar');
        }

        return back();
    }
}
