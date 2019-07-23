<?php
/**
 * Created by PhpStorm.
 * User: Kidwany
 * Date: 1/14/2019
 * Time: 7:52 PM
 */

namespace App\Http\ViewComposers;


use App\About;
use App\Contact;
use App\Service;
use App\Setting;
use  Illuminate\View\View;

class LayoutsComposer
{
    public function compose(View $view)
    {

        // Return Projects In the footer of all pages

        //retrieve Projects in footer
        $footerContact = Contact::orderby('id', 'desc')->first();
        $footerAbout = About::with('about_'.currentLang())->orderBy('created_at', 'desc')->first();
        $services = Service::with('service_'.currentLang(), 'image')->get();
        $setting = Setting::with('setting_'.currentLang(), 'image')->orderBy('created_at', 'desc')->first();

        $view->with('footerContact', $footerContact)
                ->with('footerAbout', $footerAbout)
                ->with('setting', $setting)
                ->with('services', $services);
    }
}
