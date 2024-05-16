<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'homepage'] )->name('homepage');

Route::get('/chi-sono',[PageController::class, 'aboutme'] )->name('aboutme');

Route::get('/servizi',[PageController::class, 'service'] )->name('service');

Route::get('/dettaglio-servizio/{service}',[PageController::class, 'detail'] )->name('detail');

route::get('/contatti',[PageController::class, 'contact'])->name('contact');
route::post('/send',[PageController::class, 'send'])->name('send');

Route::get('/grazie',[PageController::class, 'thankyou'] )->name('thankyou');