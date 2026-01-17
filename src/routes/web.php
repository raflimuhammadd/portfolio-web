<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectOrderController;
use App\Http\Controllers\ProjectScreenshotController;
use App\Http\Controllers\ProjectToolController;
use App\Http\Controllers\ToolController;
use App\Models\ProjectOrder;
use App\Models\ProjectTool;
use Illuminate\Support\Facades\Route;


// FRONT ROUTES

// Main page
Route::get('/', [FrontController::class, 'index'])->name('front.index');

// Details page
Route::get('/details/{project:slug}', [FrontController::class, 'details'])->name('front.details');

// Book page
Route::get('/book', [FrontController::class, 'book'])->name('front.book');
Route::post('/book/save', [FrontController::class, 'store'])->name('front.book.store');

// Services page
Route::get('/services', [FrontController::class, 'services'])->name('front.services');

// About page
Route::get('/about', [FrontController::class, 'about'])->name('front.about');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// BACK ROUTES
Route::middleware('auth')->group(function () {  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Prefix
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('projects', ProjectController::class);
        Route::resource('tools', ToolController::class);
        Route::resource('orders', ProjectOrderController::class);


        // Custom Route assign tools to project
        Route::get('/tools/assign/{project}', [ProjectToolController::class, 'create'])->name('project.assign.tool');
        Route::post('/tools/assign/save/{project}', [ProjectToolController::class, 'store'])->name('project.assign.tool.store');

        // Custom Route project tools
        Route::resource('project_tools', ProjectToolController::class);

        // Custom Route assign screenshots to project
        Route::resource('project_screenshots', ProjectScreenshotController::class)->except(['create', 'store']);
        Route::get('/screenshot/{project}', [ProjectScreenshotController::class, 'create'])->name('project_screenshots.create');
        Route::post('/screenshot/save/{project}', [ProjectScreenshotController::class, 'store'])->name('project_screenshots.store');
    
        // Custom Route orders
        Route::resource('project_orders', ProjectOrderController::class);

    });

});

require __DIR__.'/auth.php';
