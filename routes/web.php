<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminJournalController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



// Admin Authentication
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


// Admin Dashboard & Management
Route::middleware(['auth', 'admin'])->group(function () {

    // Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    // PROJECT MANAGEMENT

    Route::get('/admin/projects', [AdminProjectController::class, 'index'])
        ->name('admin.projects.index');

    // Create project page
    Route::get('/admin/projects/create', [AdminProjectController::class, 'create'])
        ->name('admin.projects.create');

    // Save new project
    Route::post('/admin/projects', [AdminProjectController::class, 'store'])
        ->name('admin.projects.store');

    // Edit project
    Route::get('/admin/projects/{project}/edit', [AdminProjectController::class, 'edit'])
        ->name('admin.projects.edit');

    // Update project
    Route::put('/admin/projects/{project}', [AdminProjectController::class, 'update'])
        ->name('admin.projects.update');

    // Delete project
    Route::delete('/admin/projects/{project}', [AdminProjectController::class, 'destroy'])
        ->name('admin.projects.destroy');


    // JOURNAL MANAGEMENT

    Route::get('/admin/journal', [AdminJournalController::class, 'index'])
        ->name('admin.journal.index');

    Route::get('/admin/journal/create', [AdminJournalController::class, 'create'])
        ->name('admin.journal.create');

    Route::post('/admin/journal', [AdminJournalController::class, 'store'])
        ->name('admin.journal.store');

    Route::get('/admin/journal/{journal}/edit', [AdminJournalController::class, 'edit'])
        ->name('admin.journal.edit');

    Route::put('/admin/journal/{journal}', [AdminJournalController::class, 'update'])
        ->name('admin.journal.update');

    Route::delete('/admin/journal/{journal}', [AdminJournalController::class, 'destroy'])
        ->name('admin.journal.destroy');

});