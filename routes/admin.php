<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\Blog\BlogController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\seo\SEOController;
use App\Http\Controllers\admin\sitemap\SitemapController;
use App\Http\Controllers\admin\Blog\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/seo', SEOController::class);
    Route::resource('/sitemap', SitemapController::class);
    route::resource('categories', CategoryController::class);
    Route::post('/categories/update-order', [CategoryController::class, 'updateOrder'])->name('categories.updateOrder');
    Route::get('categories/{id}/edit/{type}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::delete('subcategories/{id}', [CategoryController::class, 'subcategorydestroy'])->name('subcategories.destroy');
    route::resource('blogs', BlogController::class);





    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});
