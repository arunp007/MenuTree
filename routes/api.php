<?php

use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\ThirdMenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('main-menus', MainMenuController::class);
Route::apiResource('sub-menus', SubMenuController::class);
Route::apiResource('third-menus', ThirdMenuController::class);