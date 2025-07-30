<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\Blog\BlogController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\query\coustomQuery;
use App\Http\Controllers\admin\seo\SEOController;
use App\Http\Controllers\admin\sitemap\SitemapController;
use App\Http\Controllers\admin\Blog\CategoryController;
use App\Http\Controllers\admin\DatabaseController;
use App\Http\Controllers\admin\query\contactController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/seo', SEOController::class);
    Route::resource('/sitemap', SitemapController::class);
    route::resource('categories', CategoryController::class);
    Route::post('/categories/update-order', [CategoryController::class, 'updateOrder'])->name('mcategories.updateOrder');
    Route::get('categories/{id}/edit/{type}', [CategoryController::class, 'edit'])->name('mcategories.edit');
    Route::delete('subcategories/{id}', [CategoryController::class, 'subcategorydestroy'])->name('subcategories.destroy');
    route::resource('blogs', BlogController::class);
    route::resource('contacts', contactController::class);
    route::resource('custom-inquiries', coustomQuery::class);

// Route to show the export page
Route::get('/export-database', [DatabaseController::class, 'showExportPage'])->name('show.export.page');

// Route to trigger the export process
Route::get('/export-database/start', [DatabaseController::class, 'exportAll'])->name('export.database');
Route::get('/export-database/csv', [DatabaseController::class, 'exportCsvAll'])->name('export.csv');
Route::get('/export-database/csv-all', [DatabaseController::class, 'exportAllInOneCSV'])->name('export.csv.all');
Route::get('/export-database/mysql-all',[DatabaseController::class, 'exportAllInOneMySQL'])->name('export.mysql.all');


    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});
