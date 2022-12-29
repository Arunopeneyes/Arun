<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UploadController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

//Route::get('/abc', [DemoController::class, 'index']);
Route::get('/home', [DemoController::class, 'home']);
Route::get('/course', SingleActionController::class);

Route::resource('photo', PhotoController::class);

Route::group(['prefix'=>'/register'],function()
{
    
    Route::get('/', [RegistrationController::class, 'index']);
    Route::get('view', [RegistrationController::class, 'view']);
    Route::get('/trash', [RegistrationController::class, 'trash']);
    Route::get('/delete/{id}', [RegistrationController::class, 'delete'])->name('register.delete');
    Route::get('/forcedelete/{id}', [RegistrationController::class, 'forcedelete'])->name('register.forcedelete');
    Route::get('/restore/{id}', [RegistrationController::class, 'restore'])->name('register.restore');
    Route::get('/edit/{id}', [RegistrationController::class, 'edit'])->name('register.edit');
    Route::get('/update/{id}', [RegistrationController::class, 'update'])->name('register.update');
    Route::post('/', [RegistrationController::class, 'register']);
});
Route::get('/customer', function()
{
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toarray());
});

Route::get('/customer1', [CustomerController::class, 'index']);
Route::post('/customer1', [CustomerController::class, 'store']);

Route::get('/', function()
{
    return view('index');
});

Route::get('/abc', function()
{
    return view('customer');
});


Route::get('/ex1', function()
{
    return view('ex1');
});

Route::get('get-all-session', function()
{
    $session = session()->all();
    echo"<pre>";
    print_r($session);
    echo "<pre>";

});

Route::get('set-all-session', function(Request $request )
{
    $request = session()->put('user_name','Arun Vasava');
    $request = session()->put('user_id','123');
    $request = session()->flash('name','ajit');
    return redirect('get-all-session');
});

Route::get('destroy-session', function()
{
    session()->forget(['user_name', 'user_id']);
    return redirect('get-all-session');
});

Route::get('/ex', function()
{
    return view('ex');
});
Route::get('/data',[IndexController::class,'index']);
Route::get('/upload', function()
{
    return view('upload');
});
Route::post('/upload',[UploadController::class,'upload']);

Route::get('/{lang?}', function($lang = null)
{
    App::setLocale($lang);
    return view('language');
});

