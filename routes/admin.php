<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::name('admin.')
    ->middleware(['auth', 'verified'])
    ->group(function(){

    Route::get('/', function(){
        return Inertia::render('Dashboard', [
            'ResidentialComplexes' => \App\Models\ResidentialComplex::all(),
        ]);
    })->name('dashboard');

    Route::get('/residential-complexes/create', function () {
        dd('You got here');
    })->name('residential-complexes.create');

    Route::get('/residential-complexes/', function () {
        return Inertia::render('Complexes', [
            'ResidentialComplexes' => \App\Models\ResidentialComplex::all(),
        ]);
    })->name('residential-complexes');
});
