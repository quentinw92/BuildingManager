<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function(){
    return Inertia::render('Dashboard', [
        'ResidentialComplexes' => \App\Models\ResidentialComplex::all(),
    ]);
});

Route::name('admin.')
//    ->middleware(['auth', 'verified'])
    ->group(function(){
    Route::get('/residential-complexes/create', function () {
        dd('You got here');
    })->name('residential-complexes.create');

    Route::get('/residential-complexes/', function () {
        return \App\Models\ResidentialComplex::all();
    })->name('residential-complexes');
});
