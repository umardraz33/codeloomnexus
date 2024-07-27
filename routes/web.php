<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicedeatilController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/redirect' , [HomeController::class , 'redirect'])->name('redirect');
Route::get('/home', [HomeController::class, 'home'])->name('homee');
Route::get('blog',[HomeController::class, 'blog'])->name('blog');
Route::get('blog-detail/{slug}' , [HomeController::class , 'blog_detail'])->name('blog.detail');
Route::get('about-us' , [HomeController::class , 'aboutus'])->name('about-us');
Route::get('service/{slug}',[HomeController::class , 'services'])->name('service');

Route::get('service-details/{slug}' , [HomeController::class , 'service_detail'])->name('service-details');
Route::get('project',[HomeController::class , 'project'])->name('project');
Route::get('pricing',[HomeController::class , 'pricing'])->name('pricing');
Route::get('project-details/{slug}' , [HomeController::class, 'project_detail'])->name('project.details');
Route::get('contact_us' , [HomeController::class , 'contact_us'])->name('contactus');
Route::post('/contactus/mail/send' , [HomeController::class, 'contact_us_mail_send'])->name('contactus.mail.send');
Route::get('faq' , [HomeController::class , 'faq'])->name('faq');


//Admin routes starts here
Route::prefix('admins')->middleware(['admin', 'auth'])->group(function () {
    Route::get('/', [AdminController::class , 'index'])->name('admin.index');
    Route::resource('team' , TeamController::class);
    Route::resource('blog' , BlogController::class);
    Route::resource('testimonial' , TestimonialController::class);
    Route::resource('service' , ServiceController::class);
    Route::resource('servicedetail' , ServicedeatilController::class);
    Route::resource('project', ProjectController::class);
    Route::get('profile', [ProfileController::class , 'show'])->name('profile');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // this route is for texteditor image upload
    // Route::post('/upload' , [ProjectController::class , 'upload'])->name('ckeditor.upload');

});
