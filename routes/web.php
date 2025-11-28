<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = \App\Models\Project::all();
    $blogs = Blog::paginate(3);
    $locale = app()->getLocale();
    return view('welcome', compact('projects', 'blogs', 'locale'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {

    // صفحة المشاريع الرئيسية
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');

    // إنشاء مشروع جديد
    Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');

    // تعديل مشروع
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');

    // حذف مشروع
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('blogs', BlogController::class);
    Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
});

require __DIR__ . '/auth.php';
