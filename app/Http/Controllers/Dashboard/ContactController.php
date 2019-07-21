<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function edit()
    {
        //$info = Contact::orderBy('email', 'desc')->first();
        return view('dashboard.contact.edit');
    }


    public function update(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'         => 'bail|required|email|max:100',
            'phone'         => 'bail|required|min:8|max:20',
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

        $contact = Contact::orderBy('email', 'desc')->first();
        $contact->update($input);

        Session::flash('update', 'Contact Info Has Been Updated Successfully');

        return redirect('admin/contact/edit');
    }
}
