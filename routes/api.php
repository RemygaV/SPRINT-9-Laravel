<?php

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RestaurantController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/restaurants', RestaurantController::class);
Route::resource('/dishes', DishController::class);
Route::get('/restaurants/search/{name}', [RestaurantController::class, 'searchByName']); 



