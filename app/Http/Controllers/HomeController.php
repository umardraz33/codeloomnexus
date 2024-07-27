<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Admin\Blog;
use App\Models\Admin\Team;
use App\Models\Project;
use App\Models\Service;
use App\Models\servicedetail;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function redirect(){

        $user = Auth::user();

        if($user && $user->type == 'admin'){
            return view('admin.index');
        }
         else {
        return view('index');
        }
    }
    public function index()
    {
        $projects = Project::where('is_active' , 1)->get();
        $teams = Team::where('is_active', 1)->get();
        $testimonials = Testimonial::where('is_active' , 1)->get();
        $latestServices = servicedetail::where('is_active', 1)
        ->take(18)
        ->oldest()
        ->get();
        $recentPosts = Blog::latest()->where('is_active' , 1)->take(4)->get();
        return view('index', compact('teams', 'testimonials' , 'recentPosts' , 'latestServices' , 'projects'));
    }

    public function home(){
        return view('home');
    }

    public function blog(Request $request){
        $services = Service::where('is_active' , 1)->get();

        $search = $request->input('search');

        $searches = Blog::where('title', 'like', '%' . $search . '%')->where('is_active' , 1)->paginate(5);
        $blogs = Blog::where('is_active' , 1)->paginate(5);
        $recentPosts = Blog::latest()->where('is_active' , 1)->take(4)->get();
        return view('digitox.blog', compact('blogs', 'recentPosts' , 'searches', 'services'));
    }

    public function blog_detail(string $slug){
        $services = Service::where('is_active' , 1)->get();
        $blog = Blog::where('slug' , $slug)->first();
        $recentPosts = Blog::where('slug', '!=', $blog->slug)
        ->latest()
        ->where('is_active' , 1)
        ->take(4)
        ->get();
        return view('digitox.blog-detail' , compact('blog' , 'recentPosts' , 'services'));
    }

    public function aboutus(){
        $testimonials = Testimonial::where('is_active' , 1)->get();
        return view('digitox.about-us' , compact('testimonials'));
    }

    public function services(string $slug){
        $service = Service::where('slug' , $slug)->first();
        // dd($service);
        $servicedetails = servicedetail::where('service_id' , $service->id)->where('is_active' , 1)->get();
        return view('digitox.service', compact('servicedetails' , 'service'));
    }

    public function service_detail(string $slug){

        $servicedetail = ServiceDetail::where('slug', $slug)
        ->with('projects')
        ->first();
        if ($servicedetail) {
            $project = $servicedetail->projects->first();
        }

        $alternateservices = servicedetail::where('slug', '!=', $servicedetail->slug)
        ->latest()
        ->inRandomOrder()
        ->where('is_active' , 1)
        ->get();
        return view('digitox.service-details' , compact( 'servicedetail' , 'alternateservices' , 'project'));
    }

    public function project(){
        $projects = Project::where('is_active' , 1)->get();

        return view('digitox.project' , compact('projects'));
    }

    public function project_detail($slug){
        $project = Project::where('slug' , $slug)->first();
        // the below ones are for textEditor tag seperations
        // preg_match_all('/<li>(.*?)<\/li>/', $project->description, $matches);
        // $project->listItems = $matches[1] ?? [];

        // preg_match_all('/<p>(.*?)<\/p>/', $project->description, $matches);
        // $project->paragraphContent = $matches[1][0] ?? '';
        return view('digitox.project-details' , compact( 'project'));
    }

    public function pricing(){
        return view('digitox.pricing');
    }

    public function faq(){
        return view('digitox.faq');
    }

    public function contact_us(){
        return view('digitox.contact-us');
    }

    public function contact_us_mail_send(Request $request){

        try {

            Mail::to('umar.draz2519@gmail.com')->send(new ContactMail($request));
            return redirect()->route('contactus')->with('success', 'Your email sent successfully, we will contact you shortly');
            // Session::flash('success', 'Your email sent successfully, we will contact you shortly');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('contactus')->with('error', 'An error occurred while creating the record.');
            // Session::flash('error', 'An error occurred while creating the record.');
        }

        // Session::forget('success');
        // return redirect()->route('contactus');
    }


}
