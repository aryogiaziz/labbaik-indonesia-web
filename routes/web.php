<?php

use App\Http\Controllers\paketUmrohController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebBeranda;
use App\Http\Livewire\AdminArtikelController;
use App\Http\Livewire\AdminBrosurController;
use App\Http\Livewire\AdminChartController;
use App\Http\Livewire\AdminGaleriController;
use App\Http\Livewire\AdminPaketController;
use App\Models\Chart;
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

Route::get('/', [WebBeranda::class, 'index'])->name('front.index');

Route::get('/about', function () {
    return view('front.about');
})->name('front.about');

Route::get('/contact', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/packet', [paketUmrohController::class, 'index'])->name('front.packet');

Route::get('/admin/overview', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.overview');

Route::middleware('auth')->group(function () {
    Route::get('/admin/brosur', AdminBrosurController::class)->name('admin.brosur');
    Route::get('/admin/galeri', AdminGaleriController::class)->name('admin.galeri');
    Route::get('/admin/artikel', AdminArtikelController::class)->name('admin.artikel');
    Route::get('/admin/chart', AdminChartController::class)->name('admin.chart');
    Route::get('/admin/paket', AdminPaketController::class)->name('admin.paket');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
