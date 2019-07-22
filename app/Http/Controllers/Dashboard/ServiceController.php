<?php

namespace App\Http\Controllers\Dashboard;

use App\Image;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('service_en', 'createdBy', 'image')->get();
        return view('dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
        $request->validate([
            'title_en'          => 'bail|required|max:200',
            'description_en'    => 'bail|required',
            'slug_en'           => 'bail|required|max:300',
            'title_ar'          => 'bail|required|max:200',
            'description_ar'    => 'bail|required',
            'slug_ar'           => 'bail|required|max:300',
            'image_id'          => 'bail|required|mimes:jpeg,jpg,png,gif',
        ], [], [
            'title_en'          => ' Title in English',
            'description_en'    => ' Description in English',
            'slug_en'           => ' Slug in English',
            'title_ar'          => ' Title in Arabic',
            'description_ar'    => ' Description in Arabic',
            'slug_ar'           => ' Slug in Arabic',
            'image_id'          => ' Image',
        ]);


        //Upload Slide Image
        if ($uploadedFile = $request->file('image_id'))
        {
            $fileName = time() . $uploadedFile->getClientOriginalName();
            $uploadedFile->move('dashboardImages/service', $fileName);
            $filePath = 'dashboardImages/service/'.$fileName;
            $image = Image::create(['name' => $fileName, 'path' => $filePath]);
            $input['image_id'] = $image->id;
        }

        $service = new Service();
        $service->image_id = $input['image_id'];
        $service->created_by = $input['created_by'];
        $service->save();

        $service->service_ar()->create(['service_id' => $service->id, 'title' => $input['title_ar'], 'description' => $input['description_ar'], 'slug' => $input['slug_ar']]);
        $service->service_en()->create(['service_id' => $service->id, 'title' => $input['title_en'], 'description' => $input['description_en'], 'slug' => $input['slug_en']]);

        Session::flash('create', 'Service  Has Been Created Successfully');
        return redirect(adminUrl('service'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::with('image', 'service_en', 'createdBy')->find($id);
        return view('dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $service = Service::with('service_en', 'createdBy', 'image')->find($id);
        $input['created_by'] = Auth::user()->id;
        $request->validate([
            'title_en'          => 'bail|required|max:200',
            'description_en'    => 'bail|required',
            'slug_en'           => 'bail|required|max:300',
            'title_ar'          => 'bail|required|max:200',
            'description_ar'    => 'bail|required',
            'slug_ar'           => 'bail|required|max:300',
            'image_id'          => 'mimes:jpeg,jpg,png,gif',
        ], [], [
            'title_en'          => ' Title in English',
            'description_en'    => ' Description in English',
            'slug_en'           => ' Slug in English',
            'title_ar'          => ' Title in Arabic',
            'description_ar'    => ' Description in Arabic',
            'slug_ar'           => ' Slug in Arabic',
            'image_id'          => ' Image',
        ]);

        //Upload Slide Image
        if ($uploadedFile = $request->file('image_id'))
        {
            $fileName = time() . $uploadedFile->getClientOriginalName();
            $uploadedFile->move('dashboardImages/slider', $fileName);
            $filePath = 'dashboardImages/slider/'.$fileName;
            $image = Image::create(['name' => $fileName, 'path' => $filePath]);
            $input['image_id'] = $image->id;
            $service->image_id = $input['image_id'];
        }

        $service->created_by = $input['created_by'];
        $service->save();

        $service->service_ar()->update(['service_id' => $service->id, 'title' => $input['title_ar'], 'description' => $input['description_ar'], 'slug' => $input['slug_ar']]);
        $service->service_en()->update(['service_id' => $service->id, 'title' => $input['title_en'], 'description' => $input['description_en'], 'slug' => $input['slug_en']]);

        Session::flash('update', 'Service Has Been Updated Successfully');
        return redirect(adminUrl('service'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        $service->delete();

        try
        {
            if ($service->image_id)
            {
                unlink(public_path() . '/' . $service->image->path);
                DB::table('image')->where('id', $service->image_id)->delete();
            }
        }
        catch (\Exception $e)
        {
            Session::flash('exception', 'Error, Can\'t Delete Slide Because The Slide is related to another table');
            return redirect()->back();
        }

        Session::flash('delete', 'Service ' . $service->id . ' Has Been Deleted Successfully');
        return redirect(adminUrl('service'));
    }
}
