<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\RazorpayController;

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

Route::post('/reviews', [frontendController::class, 'reviewData'])->name('reviews');

Route::get('/safty', [frontendController::class, 'websecure']);
Route::get('/destroy', [frontendController::class, 'destroy']);

Route::get('/dev', [frontendController::class, 'working']);

Route::middleware(['safty'])->group(function () {
Route::get('/', [frontendController::class, 'home']);
Route::get('/home', [frontendController::class, 'home'])->name('homepage');
Route::get('/home2', [frontendController::class, 'home2'])->name('homepage2');
Route::get('/about', [frontendController::class, 'about'])->name('about'); 
Route::get('/our-solution', [frontendController::class, 'oursolution'])->name('oursolution');
Route::get('/gallery', [frontendController::class, 'gallery'])->name('gallery');
Route::get('/impact', [frontendController::class, 'impact'])->name('impact');
Route::get('/legal-notice', [frontendController::class, 'legalnotice'])->name('legalnotice');
Route::get('/privacy-notice', [frontendController::class, 'privacypolicy'])->name('privacy');
Route::get('/affiliation', [frontendController::class, 'affiliations'])->name('affiliations');
Route::get('/careers', [frontendController::class, 'careers'])->name('careers');
Route::get('/our-products', [frontendController::class, 'products'])->name('products');

Route::get('/ncnda7', [frontendController::class, 'ncnda'])->name('ncnda');
Route::get('/ncnda', [frontendController::class, 'ncndamain'])->name('ncndamain');

Route::get('/search', [frontendController::class, 'search'])->name('front.search');
Route::get('/blog', [frontendController::class, 'blog'])->name('blog');
Route::get('/contact-us', [frontendController::class, 'contact'])->name('contact');
Route::post('/contact-us', [frontendController::class, 'sendcontact']); 
Route::post('/affiliateform-post', [frontendController::class, 'sendaffiliateform']); 

// Route::get('/blog/{slug}', [frontendController::class, 'singleblog'])->name('front.singleblog');
// Route::get('/categories', [frontendController::class, 'blogcategories'])->name('front.categories');
// Route::get('/categories/{slug}', [frontendController::class, 'singlecategories'])->name('front.singlecategories');

Route::get('/login',[usersController::class,'users'])->name('login.users');
Route::post('/checklogin',[usersController::class,'checklogin'])->name('checklogin.users');
Route::post('/login',[usersController::class, 'wpaddusers']);
Route::get('/logout',[usersController::class, 'logout'])->name('clogout');
Route::get('/dashboard',[usersController::class, 'dashboard'])->name('login.dashboard');
Route::get('/dashboard/{id}',[usersController::class, 'getorder']);
Route::delete('/dashboard/{id}',[usersController::class, 'deletegetorder']);
Route::post('/dashboard/userupdate',[usersController::class, 'userupdate']);
Route::post('/purchased',[usersController::class, 'purchased']);

Route::prefix('/admin')->group(function(){
  Route::get('/',[backendController::class, 'login']);
  Route::get('/dashboard',[backendController::class, 'dashboard'])->name('dashboard');
  Route::post('/login',[backendController::class, 'checklogin'])->name('login');
  Route::get('/logout',[backendController::class, 'logout'])->name('logout');

  Route::get('/all-products',[backendController::class, 'allblogs'])->name('all-blogs');
  Route::get('/add-product',[backendController::class, 'addblog'])->name('add-blog');
  Route::post('/add-product',[backendController::class, 'wpaddblog'])->name('wpadd-blog');
  Route::post('/update-product',[backendController::class, 'UpdateBlog']);
  Route::get('/edit-blog/{id}',[backendController::class, 'editblog']);
  Route::delete('/delete-blog/{id}',[backendController::class, 'DeleteBlog']);

  Route::get('/all-homes/{id}',[backendController::class, 'allhomes'])->name('all-homes');
  Route::post('/update-home',[backendController::class, 'Updatehome']);
  Route::delete('/delete-home/{id}',[backendController::class, 'Deletehome']);

  Route::get('/all-reviews',[backendController::class, 'allreviews'])->name('all-reviews');
  Route::get('/get-review/{id}',[backendController::class, 'getReview'])->name('get-review');
  Route::delete('/delete-reviews/{id}',[backendController::class, 'DeleteReviews']);

  Route::get('/all-contacts',[backendController::class, 'allContacts'])->name('all-contacts');
  Route::get('/single-contact/{id}',[backendController::class, 'singleContact'])->name('single-contact');
  Route::delete('/delete-contact/{id}',[backendController::class, 'DeleteContact']);
  Route::get('/contact-export-csv', [backendController::class, 'contactdownloadCSV'])->name('contact.export.csv');
  Route::get('/contact-export-pdf', [backendController::class, 'contactdownloadPDF'])->name('contact.export.pdf');
  Route::get('/single-contact-export-csv/{id}', [backendController::class, 'singlecontactdownloadCSV']);
  Route::get('/single-contact-export-pdf/{id}', [backendController::class, 'singlecontactdownloadPDF']);


  Route::get('/all-affiliates',[backendController::class, 'allAffiliates'])->name('all-affiliates');
  Route::get('/single-affiliate/{id}',[backendController::class, 'singleAffiliate'])->name('single-affiliate');
  Route::delete('/delete-affiliate/{id}',[backendController::class, 'DeleteAffiliate']);
  Route::get('/export-csv', [backendController::class, 'downloadCSV'])->name('export.csv');
  Route::get('/export-csv/{id}', [backendController::class, 'singledownloadCSV']);
  Route::get('/export-pdf', [backendController::class, 'downloadPDF'])->name('export.pdf');
  Route::get('/export-pdf/{id}', [backendController::class, 'singledownloadPDF']);
  

  Route::get('/all-blogs-categories',[backendController::class, 'allcategories'])->name('all-blogs-categories');
  Route::get('/add-blog-category',[backendController::class, 'addcategory'])->name('add-blog-category');
  Route::post('/add-blog-category',[backendController::class, 'wpaddcategory'])->name('wpadd-blog-category');
  Route::post('/update-blog-category',[backendController::class, 'UpdateBlogCategory']);
  Route::get('/edit-blog-categories/{id}',[backendController::class, 'editblogcategories']);
  Route::delete('/delete-blog-categories/{id}',[backendController::class, 'DeleteBlogCategory']);

  
  Route::get('/all-customers',[backendController::class, 'allcustomers'])->name('all-customers');
  Route::delete('/delete-customers/{id}',[backendController::class, 'DeleteCustomer']);

  Route::get('/post-seo/{id}',[backendController::class, 'postseo'])->name('postseo');
  Route::post('/post-seo',[backendController::class, 'wpaddpostseo']);
  
  Route::get('/post-cat-seo/{id}',[backendController::class, 'postcatseo'])->name('postcatseo');
  Route::post('/post-cat-seo',[backendController::class, 'wpaddpostcatseo']); 

  Route::get('/global-seo',[backendController::class, 'globalseo'])->name('global-seo'); 
  Route::post('/global-seo',[backendController::class, 'wpglobalseo'])->name('wp-global-seo'); 

  Route::get('/admin-info',[backendController::class, 'admininfo'])->name('admin-info'); 
  Route::post('/admin-info',[backendController::class, 'wpadmininfo'])->name('wp-admin-info'); 

  Route::get('/page-seo',[backendController::class, 'pageseo'])->name('page-seo'); 
  Route::get('/add-page',[backendController::class, 'getpage'])->name('add-page'); 
  Route::post('/add-page',[backendController::class, 'addpage']); 
  Route::get('/edit-page/{id}',[backendController::class, 'geteditpage']); 
  Route::post('/update-page',[backendController::class, 'updatepageseo']); 
  Route::get('/delete-page/{id}',[backendController::class, 'deletepageseo']); 
});

Route::get('/{slug}',[frontendController::class, 'redirectpage'])->name('front.redirectpage');


});