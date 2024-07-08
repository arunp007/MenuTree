<?php

use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\ThirdMenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/menutree", function () {   
    return Inertia::render('MenuTree');
});

Route::get('/menutree/createmainmenu', function(){
    return Inertia::render('CreateMainMenu');
});

// Route::post('menutree', [MainMenuController::class, 'store']);

Route::get('/menutree/createsubmenu', function(){
    return Inertia::render('CreateSubMenu');
});

Route::post('menutree', [SubMenuController::class, 'store']);

Route::get('/menutree/createthirdmenu', function(){
    return Inertia::render('CreateThirdMenu');
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
