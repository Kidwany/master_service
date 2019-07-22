<?php

namespace App\Http\Controllers\Dashboard;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function edit()
    {
        $info = Contact::orderBy('created_at', 'desc')->first();
        return view('dashboard.contact.edit', compact('info'));
    }


    public function update(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'         => 'bail|required|email|max:100',
            'phone'         => 'bail|required|min:8|max:20',
            'phone_alt'     => 'bail|max:20',
            'address_en'    => 'bail|required|max:500',
            'address_ar'    => 'bail|required|max:500',
            'facebook'      => 'bail|url|nullable|max:300',
            'twitter'       => 'bail|url|nullable|max:300',
            'instagram'     => 'bail|url|nullable|max:300',
            'youtube'       => 'bail|url|nullable|max:300',
            'linkedin'      => 'bail|url|nullable|max:300',
            'pintrest'      => 'bail|url|nullable|max:300',
            'behance'       => 'bail|url|nullable|max:300',
        ], [], [
            'email'         => 'Email',
            'phone'         => 'Phone',
            'address_en'    => 'Address in English',
            'address_ar'    => 'Address in Arabic',
            'facebook'      => 'Facebook',
            'twitter'       => 'Twitter',
            'instagram'     => 'Instagram',
            'youtube'       => 'Youtube',
            'linkedin'      => 'Linkedin',
            'pintrest'      => 'Pintrest',
            'behance'       => 'Behance',

        ]);

        $contact = Contact::orderBy('created_at', 'desc')->first();
        $contact->update($input);

        Session::flash('update', 'Contact Info Has Been Updated Successfully');
        return redirect(adminUrl('contact/edit'));
    }
}
