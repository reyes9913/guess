<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/cope/{id}/zones',[AdministratorsController::class, 'itemSelectZones']);

Route::get('/customers/{search}', [AdministratorsController::class, 'byCustomers']);

Route::get('/customers/details/{id}',[AdministratorsController::class, 'byCustomersDetails']);

Route::get('/technical/{search}',[AdministratorsController::class, 'byTechnicalDetails']);




