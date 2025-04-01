<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/', [HomeController::class, 'Homeindex'])->name('Homeindex');
Route::post('/admin/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::match(['get', 'post'], '/login', [HomeController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('index');
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/admin/contact/delete/{id}', [AdminController::class, 'deleteCon'])->name('deleteCon');
    Route::match(['get', 'post'], '/admin/portfolio', [AdminController::class, 'addportfolio'])->name('addportfolio');
    Route::get('/admin/allPortFolio', [AdminController::class, 'allPortFolio'])->name('allPortFolio');
    Route::get('/admin/deletePortfolio/{id}', [AdminController::class, 'deletePortfolio'])->name('deletePortfolio');
    Route::match(['get', 'post'], '/admin/addLatestBlog', [AdminController::class, 'addLatestBlog'])->name('addLatestBlog');
    Route::get('/admin/allLatestBlogs', [AdminController::class, 'allLatestBlogs'])->name('allLatestBlogs');
    Route::get('/admin/deleteBlogs/{id}', [AdminController::class, 'deleteBlogs'])->name('deleteBlogs');
    Route::get('/admin/allfeedback', [AdminController::class, 'allfeedback'])->name('allfeedback');
    Route::get('/admin/deleteFeed/{id}', [AdminController::class, 'deleteFeed'])->name('deleteFeed');
    Route::post('/admin/Aprove/{id}', [AdminController::class, 'approve'])->name('approve');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});
