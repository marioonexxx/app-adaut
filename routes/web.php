<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Middleware\Administrator;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::post('/savekontak', [HomeController::class, 'save_kontak'])->name('save.kontak');
Route::get('/detailpaket/{id}',[HomeController::class, 'show_paket'])->name('show.paket');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('show.testimonial');
Route::post('/testimonial', [HomeController::class, 'testimonial_submit'])->name('store.testimonial');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/detailpaket', function () {
//     return view('homepage.detailpaket');
// })->name('detailpaket');

// Route::get('/tentang', function () {
//     return view('homepage.tentang');
// })->name('tentang');

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/detail-paketwisata/{id}', [HomePageController::class, 'detailPaketwisata'])->name('homepage.show.paket-wisata');
Route::get('/testimonial-client',[HomePageController::class, 'insertTestimonial'])->name('homepage.insert.testimonial');
Route::post('/testimonial-client',[HomePageController::class, 'storeTestimonial'])->name('homepage.store.testimonial');
Route::get('/tentang', [HomePageController::class, 'tentangAdaut'])->name('homepage.tentang.adaut');
Route::get('/list-paketwisata',[HomePageController::class, 'listPaket'])->name('homepage.listpaket');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','verified','Administrator')->group(function(){
    Route::get('dashboard',[AdministratorController::class,'index'])->name('administrator.dashboard');
    Route::get('administrator/paketwisata',[AdministratorController::class, 'show_paketwisata'])->name('administrator.showpaketwisata');
    Route::post('administrator/storepaketwisata',[AdministratorController::class, 'store_paketwisata'])->name('administrator.storepaketwisata');
    Route::get('administrator/editpaketwisata/{id}/edit',[AdministratorController::class, 'edit_paketwisata'])->name('administrator.editpaketwisata');
    Route::put('administrator/updatepaketwisata/{id}',[AdministratorController::class, 'update_paketwisata'])->name('administrator.updatepaketwisata');
    Route::delete('administrator/deletepaketwisata/{id}',[AdministratorController::class, 'destroy_paketwisata'])->name('administrator.deletepaketwisata');
    Route::get('administrator/kontak',[AdministratorController::class,'show_kontak'])->name('administrator.showkontak');

    Route::resource('paket-wisata', PaketWisataController::class);

    Route::get('administrator/testimonial',[TestimonialController::class, 'index'])->name('adminstrator.testimonial.index');
    Route::delete('administrator/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('adminstrator.testimonial.destroy');
});

require __DIR__.'/auth.php';
