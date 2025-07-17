<?php

use App\Http\Controllers\SuppliesShopController;
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MallController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\JobController;
// صفحة الـ Home
Route::get('/', function () {
    return view('home');
});

// صفحة تسجيل الدخول
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// صفحة إنشاء الحساب
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

// صفحة الهوم
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/about', function () {
    return view('about');
})->name('about');


// صفحات أخرى
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');



Route::get('/schools', [SchoolController::class, 'showSchools'])->name('schools');
Route::get('/schools/{id}', [SchoolController::class, 'showSchoolDetails'])->name('school.details');




Route::get('/hospitals/{id}', [HospitalController::class, 'show'])->name('hospitals.show');
// مستشفيات
Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals');
Route::get('/nasaaem', [HospitalController::class, 'nasaaem']);
Route::get('/shifa', [HospitalController::class, 'shifa']);
Route::get('/saudi', [HospitalController::class, 'saudi']);
Route::get('/cleo', [HospitalController::class, 'cleo']);
Route::get('/joy', [HospitalController::class, 'joy']);
Route::get('/wham', [HospitalController::class, 'wham']);

// Supplies Shops
Route::get('/supplies', [SuppliesShopController::class, 'index'])->name('supplies');
Route::get('/supply/{id}', [SuppliesShopController::class, 'show'])->name('supplies.show');


Route::get('/supplies/medical', [SuppliesShopController::class, 'medical'])->name('supplies.medical');
Route::get('/supplies/horus', [SuppliesShopController::class, 'horus'])->name('supplies.horus');
Route::get('/supplies/elmasryia', [SuppliesShopController::class, 'elmasryia'])->name('supplies.elmasryia');
Route::get('/supplies/miracle', [SuppliesShopController::class, 'miracle'])->name('supplies.miracle');
Route::get('/supplies/alqasr', [SuppliesShopController::class, 'alqasr'])->name('supplies.alqasr');
Route::get('/supplies/golden', [SuppliesShopController::class, 'golden'])->name('supplies.golden');


Route::get('/malls/mallegypt', function () {
    return view('malls.mallegypt');
});
// عرض كل المولات
Route::get('/malls', [MallController::class, 'index'])->name('malls');

Route::get('/malls/mallegypt', [MallController::class, 'mallegypt'])->name('malls.mallegypt');
Route::get('/malls/cfc', [MallController::class, 'cfc'])->name('malls.cfc');
Route::get('/malls/almaza', [MallController::class, 'almaza'])->name('malls.almaza');
Route::get('/malls/carrefour', [MallController::class, 'carrefour'])->name('malls.carrefour');
Route::get('/malls/hyperone', [MallController::class, 'hyperone'])->name('malls.hyperone');
Route::get('/malls/lulu', [MallController::class, 'lulu'])->name('malls.lulu');




Route::post('/school/{school_id}/feedback', [FeedbackController::class, 'store'])->name('feedback.store');



Route::get('/job', [JobController::class, 'index'])->name('job');




Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');





    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categories.store');
});
