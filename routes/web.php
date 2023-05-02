<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\GalleryImageController;
use App\Http\Controllers\admin\GalleryVideoController;
use App\Http\Controllers\admin\SelectionController;
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
Auth::routes(['register' => true,'home' => false]);




Route::get('/videogallery', [GalleryVideoController::class, 'FrontPage']);
Route::get('/gallery', [GalleryImageController::class, 'FrontPage']);
Route::get('/gallery/{slug}', [GalleryImageController::class, 'galleryView'])->name('image.slug');
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us/store', [ContactController::class, 'store'])->name('contact_store');
Route::get('selection', [SelectionController::class, 'frontPage'])->name('selection.show');
Route::get('hostel', function () {
    return view('front.pages.admission.hostel');
});
Route::get('documents', function () {
    return view('front.pages.admission.documents');
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

    Route::get('selection/list', [SelectionController::class, 'index'])->name('selection.list');
    Route::get('selection/create', [SelectionController::class, 'create'])->name('selection.create');
    Route::post('selection/store', [SelectionController::class, 'store'])->name('selection.store');
    Route::post('selection/update/{id}', [SelectionController::class, 'update'])->name('selection.update');
    Route::get('selection/edit/{id}', [SelectionController::class, 'edit'])->name('selection.edit');
    Route::get('selection/delete/{id}', [SelectionController::class, 'delete'])->name('selection.delete');

});