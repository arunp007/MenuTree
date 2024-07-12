<?php

use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\ThirdMenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/menutree', [MainMenuController::class, 'index']);

Route::resource('/menutree',MainMenuController::class);

Route::resource('/submenu',SubMenuController::class);

Route::resource('/thirdmenu', ThirdMenuController::class);


// Route::post('/menutree',[MainMenuController::class, 'store']);

// Route::get('/thirdmenu/create', [ThirdMenuController::class, 'create'])->name('thirdmenu.create');

// Route::post('/thirdmenu', [ThirdMenuController::class, 'store'])->name('thirdmenu.store');
// Route::get('/menutree', [MainMenuController::class, 'create']);

// Route::get('menutree/createthirdmenu', function(){
//     return Inertia::render('CreateThirdMenu');
// });





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
