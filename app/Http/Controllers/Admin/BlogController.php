<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $image = $request->image;
        // $fileName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move('admin\assets\img\uploads' , $fileName);
        try {
            $images = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move('admin/assets/img/uploads', $imageName); // Store in the public disk under the 'admin/assets/img/uploads' directory

                    // $images[] = 'admin/assets/img/uploads/' . $imageName;
                    $images[] = $imageName;
                }
            }
            // dd($request->file('images'));

            $blog = Blog::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'description' => $request->description,
                'detail_description' => $request->detail_description,
                'images' => $images,
                'is_active' => boolval($request->input('is_active')),
            ]);

            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


        // dd($images);

        return redirect()->route('blog.index');
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
       $blog = Blog::where('id' , $id)->first();
       return view('admin.blog.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //    $image = $request->image;
    //    $fileName = time() . '.' . $image->getClientOriginalExtension();
    //    $image->move('admin\assets\img\uploads' , $fileName);

    try {
        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('admin/assets/img/uploads', $imageName); // Store in the public disk under the 'admin/assets/img/uploads' directory

                // $images[] = 'admin/assets/img/uploads/' . $imageName;
                $images[] = $imageName;
            }
        }

           $blog = Blog::where('id' , $id)->first();
           $blog->title = $request->title;
           $blog->slug = Str::slug($request->title , '-');
           $blog->description = $request->description;
           $blog->detail_description = $request->detail_description;
           $blog->images = $images;
           $blog->is_active = $request->has('is_active') ? 1 : 0;

           $blog->save();
        Session::flash('success', 'Data updated successfully.');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        Session::flash('error', 'An error occurred.');
    }


       return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::where('id' , $id)->first();
            $blog->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }
       return redirect()->back();
    }
}
