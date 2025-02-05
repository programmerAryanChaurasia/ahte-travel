<?php

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\Home\DashboardController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MyUserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PlanYourTripController;
use App\Http\Controllers\Admin\ReviewController;//
use App\Http\Controllers\FrontEnd\FrontendReviewController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\GalleryController;
//FrontEnd
use App\Http\Controllers\FrontEnd\HomePageController;


// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/',[HomePageController::class,'index']);
Route::get('/railway',function(){
    return view('frontend.railway');
})->name('railway');
Route::get('/blog',function(){
    return view('frontend.blog.blog-list');
})->name('blog-list');
Route::get('/blog-one',function(){
    return view('frontend.blog.particular-blog');
})->name('particular-blog');


Route::get('/about-us',function(){
    return view('frontend.about-us');
})->name('about-us');

Route::get('/contact',function(){
    return view('frontend.contact');
})->name('contact');

Route::get('/review',function(){
    return view('frontend.review');
})->name('review');

Route::get('/rail-test',function(){
    return view('frontend.rail-test');
});

Route::get('/packages',function(){
    return view('frontend.packages');
})->name('packages');


// Route::get('/{cat_slug}/{sub_cat_slug}',[HomePageController::class,'post_page']);
// Route::get('/{cat_slug}',[HomePageController::class,'category_page']);


//Code Editor
Route::get('/html-css-js/code/editor', function () {
    return view('frontend.codeeditor.index');
})->name("codeeditor");

Auth::routes();

Route::get('/admin/login/form',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin/login/form',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register/form',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register/form',[RegisterController::class,'createAdmin'])->name('admin.register');

//When User Login then working this route...
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('abcde','form');

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/datascience/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

    Route::get('/admin/category/index',[CategoryController::class,'index'])->name('admin.category.index');
    Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/admin/category/list',[CategoryController::class,'list'])->name('admin.category.list');
    Route::post('/admin/category/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('/admin/category/update',[CategoryController::class,'update'])->name('admin.category.update');
    Route::post('/admin/category/delete',[CategoryController::class,'delete'])->name('admin.category.delete');

    Route::get('/admin/sub-category/index',[SubCategoryController::class,'index'])->name('admin.sub-category.index');
    Route::post('/admin/sub-category/store',[SubCategoryController::class,'store'])->name('admin.sub-category.store');
    Route::get('/admin/sub-category/list',[SubCategoryController::class,'list'])->name('admin.sub-category.list');
    Route::post('/admin/sub-category/edit',[SubCategoryController::class,'edit'])->name('admin.sub-category.edit');
    Route::post('/admin/sub-category/update',[SubCategoryController::class,'update'])->name('admin.sub-category.update');
    Route::post('/admin/sub-category/delete',[SubCategoryController::class,'delete'])->name('admin.sub-category.delete');

    Route::get('/admin/tag/index',[TagController::class,'index'])->name('admin.tag.index');

    Route::get('/admin/post/index',[PostController::class,'index'])->name('admin.post.index');
    Route::post('/admin/post/store',[PostController::class,'store'])->name('admin.post.store');
    Route::Post('/admin/post/get-sub-category',[PostController::class,'get_sub_category'])->name('admin.post.get-sub-category');
    Route::get('/admin/post/list',[PostController::class,'list'])->name('admin.post.list');
    Route::Post('/admin/post/delete',[PostController::class,'delete'])->name('admin.post.delete');
    Route::Post('/admin/post/edit',[PostController::class,'edit'])->name('admin.post.edit');
    Route::Post('/admin/post/update',[PostController::class,'update'])->name('admin.post.update');

    Route::get('/admin/comment/index',[CommentController::class,'index'])->name('admin.comment.index');

    Route::get('/admin/user/index',[MyUserController::class,'index'])->name('admin.user.index');

    //admin.plan-your-trip.index


    // Display all trips
    Route::get('/admin/plan-your-trips/list', [PlanYourTripController::class, 'index'])->name('admin.plan-your-trips.index');
    Route::get('/admin/plan-your-trips/create', [PlanYourTripController::class, 'create'])->name('admin.plan-your-trips.create');
    Route::post('/admin/plan-your-trips', [PlanYourTripController::class, 'store'])->name('admin.plan-your-trips.store');
    Route::get('/admin/plan-your-trips/{id}', [PlanYourTripController::class, 'show'])->name('admin.plan-your-trips.show');
    Route::get('/admin/plan-your-trips/{planYourTrip}/edit', [PlanYourTripController::class, 'edit'])->name('admin.plan-your-trips.edit');
    Route::put('/admin/plan-your-trips/{id}', [PlanYourTripController::class, 'update'])->name('admin.plan-your-trips.update');
    Route::delete('/admin/plan-your-trips/{id}', [PlanYourTripController::class, 'destroy'])->name('admin.plan-your-trips.destroy');
    Route::get('/admin/plan-your-trips/restore/{id}', [PlanYourTripController::class, 'restore'])->name('admin.plan-your-trips.restore');
    Route::delete('/admin/plan-your-trips/force-delete/{id}', [PlanYourTripController::class, 'forceDelete'])->name('admin.plan-your-trips.force-delete');



    //Review






});

Route::post('/submit-review', [FrontendReviewController::class, 'store'])->name('frontend.reviews.store');
Route::post('/submit-contact', [ContactController::class, 'store'])->name('frontend.contacts.store');
Route::post('/submit-gallery', [GalleryController::class, 'store'])->name('frontend.gallery.store');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


