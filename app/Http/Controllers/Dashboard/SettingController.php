<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //$info = Setting::orderBy('id', 'desc')->first();
        return view('dashboard.setting.edit');
    }






    public function update(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'website_title_en'  => 'bail|max:100',
            'website_title_ar'  => 'bail|required|max:100',
            'website_desc_en'   => 'bail|required|max:1000',
            'website_desc_ar'   => 'bail|required|max:1000',
            'default_lang'      => 'bail|required',
            'open'              => 'bail|int',
            'thumb'             => 'bail|file|mimes:jpeg,jpg,png,gif',
            'logo'              => 'bail|file|mimes:jpeg,jpg,png,gif',
            'favicon'           => 'bail|file|mimes:jpeg,jpg,png,gif',
        ], [], [
            'website_title_en'  => 'Website Title in English',
            'website_title_ar'  => 'Website Title in Arabic',
            'website_desc_en'   => 'Website Description in English',
            'website_desc_ar'   => 'Website Description in Arabic',
            'default_lang'      => 'Default Language',
            'open'              => 'Website Status',
            'thumb'             => 'Thumb',
            'logo'              => 'Logo',
            'favicon'           => 'Favicon',

        ]);



        if ($file = $request->file('thumb'))
        {
            $name =  time() . $file->getClientOriginalName();
            $file->move('dashboardImages/settings', $name);
            $path = 'dashboardImages/settings/' . $name;
            $image = Image::create(['name' => $name, 'path' => $path]);
            $input['thumb'] = $image->id;
        }

        if ($file = $request->file('logo'))
        {
            $name =  time() . $file->getClientOriginalName();
            $file->move('dashboardImages/settings', $name);
            $path = 'dashboardImages/settings/' . $name;
            $image = Image::create(['name' => $name, 'path' => $path]);
            $input['logo'] = $image->id;
        }

        if ($file = $request->file('favicon'))
        {
            $name =  time() . $file->getClientOriginalName();
            $file->move('dashboardImages/settings', $name);
            $path = 'dashboardImages/settings/' . $name;
            $image = Image::create(['name' => $name, 'path' => $path]);
            $input['favicon'] = $image->id;
        }


        $setting = Setting::orderBy('created_at', 'desc')->first();
        if (!empty($setting))
        {
            $setting->update($input);
        }
        else
        {
            Setting::create($input);
        }

        Session::flash('update', 'Setting Has Been Updated Successfully');

        return redirect('admin/setting/edit');
    }
}
