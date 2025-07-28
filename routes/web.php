<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\portal\GalleryController;
use App\Http\Controllers\portal\AboutController;
use App\Http\Controllers\portal\ContactController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ContentController;

use App\Http\Controllers\admin\ContactController as AdminContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth.api_token'])->group(function () {
    Route::get('/register-collaborator', [HomeController::class, 'indexRegisterCollaborator'])->name('register.collaborator');
    Route::post('/register-collaborator', [HomeController::class, 'registerCollaborator'])->name('register.collaborator.post');
    Route::post('/invoice', [HomeController::class, 'indexRegisterInvoice'])->name('invoice');
    Route::get('/invoice', [HomeController::class, 'indexInvoice'])->name('invoice.index'); // Assuming this route is needed
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.detail');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactInsert'])->name('contact.insert');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/forgot-password', [AuthController::class, 'forgotPasswordIndex'])->name('forgot.password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.api_token'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [DashboardController::class, 'usersIndex'])->name('admin.users');
    Route::get('/admin/contents', [DashboardController::class, 'contentIndex'])->name('admin.contents');
    Route::get('/admin/contacts', [DashboardController::class, 'contactIndex'])->name('admin.contacts');
    
    // Users
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    
    // Contents
    Route::get('/admin/contents/create', [ContentController::class, 'create'])->name('admin.contents.create');
    Route::post('/admin/contents', [ContentController::class, 'store'])->name('admin.contents.store');
    Route::delete('/admin/contents/{id}', [ContentController::class, 'destroy'])->name('admin.contents.destroy');

    // Contacts
    Route::delete('/admin/contacts/{id}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
});

