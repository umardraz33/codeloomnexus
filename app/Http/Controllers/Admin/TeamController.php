<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.Team.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designations = config('constants.designation');
        return view('admin.Team.create' , compact('designations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('admin/assets/img/uploads' , $fileName);

            Team::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $fileName,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ]);
            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


        return redirect()->route('team.index');
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
       $designations = config('constants.designation');
        $team = Team::where('id', $id)->first();
        return view('admin.Team.edit' , compact('team' , 'designations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $image = $request->image;
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('admin/assets/img/uploads' , $fileName);

            $team = Team::where('id' , $id)->first();
            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->image = $fileName;

            $team->save();
            Session::flash('success', 'Operation was successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


       return redirect()->route('team.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $team = Team::where('id' , $id)->first();
            $team->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }

       return redirect()->back();
    }
}
