<?php

use Illuminate\Support\Facades\Route;

//Namespace Auth
use App\Http\Controllers\Auth\LoginController;

//Namespace Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FooterController;
//Namespace User
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;

use App\Http\Controllers\Lawyer\LawyersController;
use App\Http\Controllers\Product\ProductController;

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

Route::get('/', function(){
	return redirect()->route("login");
});


Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'],function(){

	Route::get('/',[AdminController::class,'index'])->name('admin');

	Route::group(['prefix' => 'chat'],function(){
		Route::get('/',[App\Http\Controllers\Admin\ChatController::class, 'index'])->name('chat');
		Route::get('/show/{order_uuid}',[App\Http\Controllers\Admin\ChatController::class, 'show'])->name('chat.show');
		Route::post('end/{uuid}', [App\Http\Controllers\Admin\ChatController::class, 'endChat'])->name('selesai.konsultasi.chat');
	});

	Route::group(['prefix' => 'case'],function(){
		Route::get('/',[App\Http\Controllers\Admin\CaseController::class, 'index'])->name('case');
		Route::get('/show/{order_uuid}',[App\Http\Controllers\Admin\CaseController::class, 'show'])->name('case.show');
	});

	Route::group(['prefix' => 'casemanagement'],function(){
		Route::group(['prefix' => 'casecategory'],function(){
			Route::get('/',[App\Http\Controllers\CaseCategoryController::class, 'index'])->name('casecategory.index');
			Route::get('/store',[App\Http\Controllers\CaseCategoryController::class, 'store'])->name('casecategory.store');
			Route::post('/store',[App\Http\Controllers\CaseCategoryController::class, 'storePost'])->name('casecategory.store.post');
			Route::get('/edit/{id}',[App\Http\Controllers\CaseCategoryController::class, 'edit'])->name('casecategory.edit');
			Route::post('/edit/{id}',[App\Http\Controllers\CaseCategoryController::class, 'editPost'])->name('casecategory.edit.post');

		});
		Route::group(['prefix' => 'specialization'],function(){
			Route::get('/',[App\Http\Controllers\SpecializationController::class, 'index'])->name('specialization.index');
			Route::get('/',[App\Http\Controllers\SpecializationController::class, 'index'])->name('specialization.index');
			Route::get('/store',[App\Http\Controllers\SpecializationController::class, 'store'])->name('specialization.store');
			Route::post('/store',[App\Http\Controllers\SpecializationController::class, 'storePost'])->name('specialization.store.post');
			Route::get('/edit/{id}',[App\Http\Controllers\SpecializationController::class, 'edit'])->name('specialization.edit');
			Route::post('/edit/{id}',[App\Http\Controllers\SpecializationController::class, 'editPost'])->name('specialization.edit.post');
			Route::post('/delete/{id}',[App\Http\Controllers\SpecializationController::class, 'delete'])->name('specialization.delete');
		});
	});

	//Route Rescource
	Route::resource('/user','UserController');

	//Route View


});

Route::group(['namespace' => 'User', 'middleware' => 'auth' ,'prefix' => 'user'],function(){
	Route::get('/', [UserController::class,'index'])->name('user');
    Route::get('/new', [UserController::class,'new'])->name('user.new');
    Route::post('/new/store', [UserController::class,'newPost'])->name('user.new.store');
	Route::get('/edit/{uuid}', [UserController::class,'edit'])->name('user.edit');
	Route::post('/edit/{uuid}', [UserController::class,'editPost'])->name('user.post.edit');
});


Route::group(['namespace' => 'Lawyer', 'middleware' => 'auth' ,'prefix' => 'lawyers'],function(){
	Route::get('/',[LawyersController::class,'index'])->name('lawyers');
	Route::get('/new',[LawyersController::class,'new'])->name('lawyers.new');
	Route::post('/post',[LawyersController::class,'newPost'])->name('lawyers.new.post');
	Route::get('/{uuid}',[LawyersController::class,'edit'])->name('lawyers.edit');
	Route::post('/{uuid}',[LawyersController::class,'editPost'])->name('lawyers.edit.post');
	Route::delete('/{uuid}',[LawyersController::class, 'delete'])->name('lawyers.delete');
	Route::delete('/',[LawyersController::class, 'deletes'])->name('lawyers.deletes');
	Route::post('/suspend/{uuid}',[LawyersController::class, 'suspend'])->name('lawyers.suspend');
});


Route::group(['namespace' => 'Product', 'middleware' => 'auth' , 'prefix' => 'product'],function(){
	Route::get('/mitra', [ProductController::class,'mitra'])->name('product.mitra');
	Route::get('/mitra/{id}', [ProductController::class,'mitraEdit'])->name('product.mitra.edit');
	Route::post('/mitra', [ProductController::class,'mitraPostEdit'])->name('product.mitra.post.edit');
    Route::get('/mitra/store', [ProductController::class,'mitraStore'])->name('product.mitra.store');
	Route::post('/mitra/store', [ProductController::class,'mitraPostStore'])->name('product.mitra.post.store');

	Route::get('/dokumen', [ProductController::class,'document'])->name('product.document');
});

Route::group(['namespace' => 'Setting', 'middleware' => 'auth' , 'prefix' => 'setting'],function(){
	Route::get('/aboutus', [FooterController::class, 'aboutus'])->name('aboutus');
	Route::get('/contactus', [FooterController::class, 'contactus'])->name('contactus');
	Route::get('/useragreement', [FooterController::class, 'useragreement'])->name('useragreement');
	Route::get('/privacy', [FooterController::class, 'privacy'])->name('privacy');
	Route::get('/cookiesprivacy', [FooterController::class, 'cookiesprivacy'])->name('cookiesprivacy');
	Route::get('/copyright', [FooterController::class, 'copyright'])->name('copyright');
	Route::get('/brand', [FooterController::class, 'brand'])->name('brand');
	Route::get('/faq', [FooterController::class, 'faq'])->name('faq');
	Route::post('/update/{id}', [FooterController::class, 'update'])->name('footer.update');

});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth' , 'prefix' => 'admin'],function(){
	Route::get('/profile',[ProfileController::class,'index'])->name('profile');
	Route::patch('/profile/update/{user}', [ProfileController::class,'update'])->name('profile.update');
});

Route::group(['namespace' => 'Auth','middleware' => 'guest'],function(){
	Route::view('/login','auth.login')->name('login');
	Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
});

// Other
Route::view('/register','auth.register')->name('register');
Route::view('/forgot-password','auth.forgot-password')->name('forgot-password');
Route::post('/logout',function(){
	return redirect()->to('/login')->with(Auth::logout());
})->name('logout');
