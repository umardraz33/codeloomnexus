<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Servicedetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServicedeatilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicedetails = Servicedetail::all();
        return view('admin.servicedetail.index', compact('servicedetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.servicedetail.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $attributes = [
                'title' => $request->title,
                'slug' => Str::slug($request->title, '_'),
                'description' => $request->description,
                // 'project_title' => $request->project_title,
                // 'project_description' => $request->project_description,
                'service_id' => $request->service_id,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ];

            if ($request->hasFile('svg')) {
                $svgName = time() . '.' . $request->file('svg')->getClientOriginalExtension();
                $request->file('svg')->move('admin/assets/img/svg', $svgName);
                $attributes['svg'] = $svgName;
            }

            // if ($request->hasFile('project_overview_image')) {
            //     $imageName = time() . '.' . $request->file('project_overview_image')->getClientOriginalExtension();
            //     $request->file('project_overview_image')->move('admin/assets/img/uploads', $imageName);
            //     $attributes['project_overview_image'] = $imageName;
            // }

            Servicedetail::create($attributes);
            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


        // return redirect()->back();
        return redirect()->route('servicedetail.index');
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
        $services = Service::all();
        $servicedetail = Servicedetail::where('id', $id)->first();
        //    dd($service->id);
        return view('admin.servicedetail.edit', compact('servicedetail', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $servicedetail = Servicedetail::where('id', $id)->first();

            // Check if a new SVG is provided
            if ($request->hasFile('svg')) {
                $svgName = time() . '.' . $request->file('svg')->getClientOriginalExtension();
                $request->file('svg')->move('admin/assets/img/svg', $svgName);
                $servicedetail->svg = $svgName;
            }

            // Check if a new project overview image is provided
            if ($request->hasFile('project_overview_image')) {
                $imageName = time() . '.' . $request->file('project_overview_image')->getClientOriginalExtension();
                $request->file('project_overview_image')->move('admin/assets/img/uploads', $imageName);
                $servicedetail->project_overview_image = $imageName;
            }

            $servicedetail->title = $request->title;
            $servicedetail->slug = Str::slug($request->title, '_');
            $servicedetail->description = $request->description;
            // $service->project_overview_image = $imageName;
            $servicedetail->project_title = $request->project_title;
            $servicedetail->project_description = $request->project_description;
            $servicedetail->service_id = $request->service_id;


            $servicedetail->is_active = $request->has('is_active') ? 1 : 0;

            $servicedetail->save();
            Session::flash('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }

        return redirect()->route('servicedetail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $servicedetail = Servicedetail::where('id', $id)->first();
            $servicedetail->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }
        return redirect()->back();
    }
}
