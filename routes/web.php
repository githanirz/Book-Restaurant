<?php

use App\Http\Controllers\BlogBackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BooktableBackendController;
use App\Http\Controllers\BooktableController;
use App\Http\Controllers\ChefBackendController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\KategoriBackendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuBackendController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserBackendController;
use App\Http\Controllers\RoleBackendController;
use App\Http\Controllers\LoginController;
use App\Models\Chef;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/booktable', function () {
    return view('makan.booktable');
});
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu-detail/{kategori_id}', [MenuController::class, 'search']);
Route::get('/chef', [ChefController::class, 'index']);
Route::get('/chef-detail/{role_id}', [ChefController::class, 'search']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}   ', [BlogController::class, 'show']);
Route::post('/booktable-create', [BooktableController::class, 'store']);
Route::get('/booktable', [BooktableController::class, 'index']);


Route::get('/role', function () {
    return view('makan.role');
});



Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerAcc']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/backend', function () {
    return view('backend.index');
})->middleware('auth');

Route::resource('chef-backend', ChefBackendController::class);
Route::resource('blog-backend', BlogBackendController::class);
Route::resource('booktable-backend', BooktableBackendController::class)->middleware('isAdmin');
Route::resource('kategori-backend', KategoriBackendController::class);
Route::resource('role-backend', RoleBackendController::class);
Route::resource('menu-backend', MenuBackendController::class)->middleware('isAdmin');
Route::resource('user-backend', UserBackendController::class)->middleware('isAdmin');
