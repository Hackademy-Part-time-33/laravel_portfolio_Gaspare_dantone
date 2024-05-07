<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/chi-sono', function () {
    return view('aboutme');
})->name('aboutme');

Route::get('/servizi-offerti', function () {
    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web'],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],
    ];
    return view('service' , ['servizi' => $servizi]) ;
})->name('service');

Route::get('/dettaglio-servizi/{service}', function ($service) {
    return view('detail', ['servizi' => $service]) ;
})->name('detail');

