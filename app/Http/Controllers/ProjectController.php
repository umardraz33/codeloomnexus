<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Servicedetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('serviceDetail')->get();
        // dd($projects->pluck('serviceDetail'));
        return view('admin.projectss.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::where('is_active' , 1)->get();
        $servicedetails = Servicedetail::where('is_active' , 1)->get();
        return view('admin.projectss.create', compact("services" , "servicedetails"));
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
                'description' => $request->input('description'),
                'service_id' => $request->service_id,
                'servicedetail_id' => $request->servicedetail_id,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ];

            if ($request->hasFile('project_logo')) {
                $logoName = time() . '.' . $request->file('project_logo')->getClientOriginalExtension();
                $request->file('project_logo')->move('admin/assets/img/logo', $logoName);
                $attributes['project_logo'] = $logoName;
            }

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('admin/assets/img/uploads', $imageName);
                $attributes['image'] = $imageName;
            }

            Project::create($attributes);
            Session::flash('success', 'Data created successfully.');


        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }

        // dd($request->all());

        // session()->forget('success');
        // return redirect()->back();
        return redirect()->route('project.index');
    }

    // this function is for texteditor image upload
    // public function upload(Request $request)
    // {
    // //    if ($request->hasFile('upload')) {
    // //         $originName = $request->file('upload')->getClientOriginalName();
    // //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    // //         $extension = $request->file('upload')->getClientOriginalExtension();
    // //         $fileName = $fileName . '_' . time() . '.' . $extension;

    // //         $request->file('upload')->move(public_path('media'), $fileName);

    // //         $url = asset('media/' . $fileName);
    // //         return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
    // //     }

    //     if ($request->hasFile('upload')) {
    //         $imageName = time() . '.' . $request->file('upload')->getClientOriginalExtension();
    //         $request->file('upload')->move('admin/assets/img/media', $imageName);

    //         $url = asset('admin/assets/img/media/' . $imageName);
    //         return response()->json(['imageName' => $imageName, 'uploaded'=> 1, 'url' => $url]);
    //     }
    // }
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
        $project = Project::where('id', $id)->first();
        $services = Service::where('is_active' , 1)->get();
        $servicedetails = Servicedetail::where('is_active' , 1)->get();
        return view('admin.projectss.edit', compact('project', 'services' , 'servicedetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $project = Project::where('id', $id)->first();

            if ($request->hasFile('project_logo')) {
                $logoName = time() . '.' . $request->file('project_logo')->getClientOriginalExtension();
                $request->file('project_logo')->move('admin/assets/img/logo', $logoName);
                $project->project_logo = $logoName;
            }
            // Check if a new project image is provided
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('admin/assets/img/uploads', $imageName);
                $project->image = $imageName;
            }

            $project->title = $request->title;
            $project->slug = Str::slug($request->title, '_');
            $project->description = $request->description;
            $project->service_id = $request->service_id;
            $project->servicedetail_id = $request->servicedetail_id;

            $project->is_active = $request->has('is_active') ? 1 : 0;

            $project->save();
            Session::flash('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $project = Project::where('id' , $id)->first();
            $project->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }

        return redirect()->back();
    }
}
