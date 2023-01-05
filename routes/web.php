<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\GalleryImageController;
use App\Http\Controllers\admin\GalleryVideoController;
use App\Http\Controllers\ContactController;
 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'home']);
Auth::routes(['register' => false,'home' => false]);




Route::get('/videogallery', [GalleryVideoController::class, 'FrontPage']);
Route::get('/gallery', [GalleryImageController::class, 'FrontPage']);
Route::get('/gallery/{slug}', [GalleryImageController::class, 'galleryView'])->name('image.slug');



Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us/store', [ContactController::class, 'store'])->name('contact_store');


Route::get('/about-matrix', function () {
    return view('front.pages.about.about-matrix');
});

Route::get('/why-matrix', function () {
    return view('front.pages.about.why-matrix');
});

Route::get('/facilities', function () {
    return view('front.pages.about.facilities');
});


Route::get('/matrix-online-test-video-lab', function () {
    return view('front.pages.about.matrix-online-test-video-lab');
});

Route::get('/testimonials', function () {
    return view('front.pages.about.testimonials');
});

Route::get('/faq', function () {
    return view('front.pages.about.faq');
});


Route::get('/courses', function () {
    return view('front.pages.courses.coursesfilter');
});

Route::get('/result/advance', function () {
    return view('front.pages.result.advanced');
});

Route::get('/result/main', function () {
    return view('front.pages.result.main');
});

Route::get('competitive-exams-result', function () {
    return view('front.pages.result.competitive-exams-result');
});

Route::get('final-college-allotment', function () {
    return view('front.pages.result.final-college-allotment');
});


Route::get('matrix_alumni', function () {
    return view('front.pages.result.matrix_alumni');
});


Route::get('applyonline', function () {
    return view('front.pages.admissions.applyonline');
});


Route::get('apply-online-for-matrix-sat', function () {
    return view('front.pages.admissions.apply-online-for-matrix-sat');
});

Route::get('searchmsatcandidate', function () {
    return view('front.pages.admissions.searchmsatcandidate');
});

Route::get('download-msat-admitcard', function () {
    return view('front.pages.admissions.download-msat-admitcard');
});

Route::get('fee-structure', function () {
    return view('front.pages.admissions.fee-structure');
});


Route::get('matrix-scholarship', function () {
    return view('front.pages.admissions.matrix-scholarship');
});


Route::get('downloads-paper', function () {
    return view('front.pages.for_student.downloads-paper');
});



Route::get('jee-college-branch-predictor', function () {
    return view('front.pages.for_student.jee-college-branch-predictor');
});

Route::get('jossacounselling/jeemainrankpredictor', function () {
    return view('front.pages.for_student.jeemainrankpredictor');
});

Route::get('neetpredictor', function () {
    return view('front.pages.for_student.neetpredictor');
});

Route::get('applynowforftp', function () {
    return view('front.pages.career.applynowforftp');
});


Route::get('applynow/forjob', function () {
    return view('front.pages.career.forjob');
});


Route::get('facultytrainingprogram', function () {
    return view('front.pages.career.facultytrainingprogram');
});


Route::get('student-login', function () {
    return view('front.pages.login');
});




Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'nampspace'=>'admin'], function(){
     
    Route::get('dashboard', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('image-gallery', [GalleryImageController::class, 'index'])->name('image.index');
    Route::get('image-create', [GalleryImageController::class, 'create'])->name('image.create');
    Route::post('image-gallery', [GalleryImageController::class, 'upload'])->name('image.upload');
    Route::get('image-gallery/destroy/{id}', [GalleryImageController::class, 'destroy'])->name('image.destroy');
    Route::get('image-gallery/view/{id}', [GalleryImageController::class, 'view'])->name('image.view');
    Route::get('image-gallery/edit/{id}', [GalleryImageController::class, 'edit'])->name('image.edit');
    Route::post('image-gallery/title', [GalleryImageController::class, 'titleUpdate'])->name('image.title.update');
    Route::get('image-gallery/delete/{id}', [GalleryImageController::class, 'deleteOne'])->name('image.delete');
    Route::post('single-image/update', [GalleryImageController::class, 'uploadOne'])->name('image.updateOne');

    Route::get('video-gallery', [GalleryVideoController::class, 'index'])->name('video.index');
    Route::get('video-create', [GalleryVideoController::class, 'create'])->name('video.create');
    Route::post('video-store', [GalleryVideoController::class, 'store'])->name('video.store');
    Route::get('video-view/{id}', [GalleryVideoController::class, 'view'])->name('video.view');
    Route::get('video-edit/{id}', [GalleryVideoController::class, 'edit'])->name('video.edit');
    Route::post('video-update/{id}', [GalleryVideoController::class, 'update'])->name('video.update');
    Route::get('video-delete/{id}', [GalleryVideoController::class, 'delete'])->name('video.delete');


});