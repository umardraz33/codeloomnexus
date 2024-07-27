<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // $image = $request->image;
            // $fileName = time() . '.' . $image->getClientOriginalExtension();
            // $image->move('admin\assets\img\upload' , $fileName);
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('admin/assets/img/uploads', $fileName);
            }
// dd($fileName);
            Testimonial::create([
                'name' => $request->name,
                'title' => $request->title,
                'slug' => Str::slug($request->title , '-'),
                'comment' => $request->comment,
                'image' => $fileName,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ]);
            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


        return redirect()->route('testimonial.index');
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
       $testimonial = Testimonial::where('id' , $id)->first();
       return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('admin/assets/img/uploads', $fileName);
            }
            $testimonial = Testimonial::where('id' , $id)->first();

            $testimonial->name = $request->name;
            $testimonial->title = $request->title;
            $testimonial->slug = Str::slug($request->title , '-');
            $testimonial->comment = $request->comment;
            $testimonial->image = $fileName;
            $testimonial->is_active = $request->has('is_active') ? 1 : 0;

            $testimonial->save();
            Session::flash('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }

       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $testimonial = Testimonial::where('id' , $id)->first();
            $testimonial->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }

       return redirect()->back();
    }
}
