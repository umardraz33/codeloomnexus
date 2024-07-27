<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        // dd($services);
        return view('admin.servics.index' , compact('services'));
    }

    // for frontend

    // public function digitox(){
    //     $services = Service::all();
    //     // dd($services);
    //     return view('digitox.partials.header', compact('services'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.servics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $svg = $request->file('svg');
        // $svg = $request->svg;
        // $svgName = time() . '.' . $svg->getClientOriginalExtension();
        // $svg->move('admin/assets/img/svg' , $svgName);

        // $image = $request->project_overview_image;
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move('admin/assets/img/uploads' , $imageName);

        // Service::create([
        //     'svg' => $svgName,
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title, '_'),
        //     'description' => $request->description,
        //     'project_overview_image' => $imageName,
        //     'project_title' => $request->project_title,
        //     'project_description' => $request->project_description,

        //     'is_active' => $request->has('is_active')? 1 : 0,
        // ]);
        try {
            Service::create([

                'title' => $request->title,
                'slug' => Str::slug($request->title, '_'),
                'is_active' => $request->has('is_active')? 1 : 0,
                ]);
            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }

        // return redirect()->back();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::where('id' , $id)->first();
    //    dd($service->id);
        return view('admin.servics.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $svg = $request->svg;
        // $svgName = time() . '.' . $svg->getClientOriginalExtension();
        // $svg->move('admin/assets/img/svg' , $svgName);


        // $image = $request->project_overview_image;
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move('admin/assets/img/uploads' , $imageName);

        try {
            $service = Service::where('id' , $id)->first();
            // $service->svg = $svgName;
            $service->title = $request->title;
            $service->slug = Str::slug($request->title , '_');

            $service->is_active = $request->has('is_active') ? 1 : 0;

            $service->save();
            Session::flash('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {

            $service = Service::where('id' , $id)->first();
            $service->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }
        return redirect()->back();
    }
}
