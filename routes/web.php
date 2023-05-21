<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TechnicalController;
use App\Http\Controllers\AdministratorsController;
use Illuminate\Support\Facades\Route;

//Rutas para logueo
Route::get('/',[LoginController::class, 'showLogin'])->name('welcome');
Route::post('/login-auth', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Rutas para tecnicos
Route::get('/tecnicos', [TechnicalController::class, 'index'])->name('technical.index');
Route::get('/tecnicos/mis-ordenes/{id}', [TechnicalController::class, 'indexOrders'])->name('technical.orders.index');
Route::get('/tecnicos/mi-historial', [TechnicalController::class, 'indexRecord'])->name('technical.record.index');
Route::get('/tecnicos/ordenes/detalles/{id}/{instalationData}', [TechnicalController::class, 'showOrdersDetailCopperOrFiber'])->name('technical.orders.show');
Route::get('/tecnicos/ordenes/detalles/ejecutar',[TechnicalController::class, 'executeOrderCopper'])->name('technical.orders.show.details.execute');
//Ruta para adminitrador
Route::get('/administradores', [AdministratorsController::class, 'index'])->name('administrators.index');
//Rutas para ordenes
Route::get('/administradores/gestion-ordenes', [AdministratorsController::class, 'indexOrders'])->name('administrators.orders.index');
//Rutas para ordenes-cobre
Route::post('/administradores/resgistrar-orden-nueva-cobre', [AdministratorsController::class, 'storeOrdersCoppers'])->name('administrators.orders.copper.store');
Route::get('/administradores/gestion-ordenes/nueva-orden-cobre', [AdministratorsController::class,'createNewCopperOrders'])->name('administrators.orders.copper.create');
Route::get('/administradores/gestion-ordenes/{id}/{number_order}/{customer}/{technical}/{pdf}/detalles', [AdministratorsController::class, 'showOrderCopperOrFiber'])->name('administrators.orders.copper.choose');
//Rutas para ordenes-fibra

//Rutas para clientes
Route::get('/administradores/gestion-clientes', [AdministratorsController::class, 'createCustomers'])->name('administrators.orders.customers.create');
Route::post('/administradores/gestion-clientes/store', [AdministratorsController::class,'storeCustomers'])->name('administrators.orders.customers.store');

Route::get('/administradores/editar-orden', [AdministratorsController::class, 'editOrders'])->name('administrators.orders.edit');
Route::get('/administradores/mostrar-orden', [AdministratorsController::class, 'showOrders'])->name('administrators.orders.show');
Route::get('/administradores/hoy', [AdministratorsController::class, 'today'])->name('administrators.orders.today');

//Rutas para usuarios
Route::get('/administradores/crear-usuario-nuevo', [AdministratorsController::class, 'createUsers'])->name('administrators.user.create');
Route::post('/administradores/crear-usuario-nuevo/store', [AdministratorsController::class, 'storeUsers'])->name('administrators.user.store');
Route::get('/administradores/mostrar-usuario', [AdministratorsController::class, 'showUserOnTable'])->name('administrators.user.show');
Route::get('/getZonas/{id}', [AdministratorsController::class, 'getZonas'])->name('getZonas');
Route::get('/administradores/{guesaUser}/editar-usuario', [AdministratorsController::class, 'editUsers'])->name('administrators.user.edit');
Route::patch('/administradores/{guesaUser}', [AdministratorsController::class, 'updateUsers'])->name('administrators.user.update');

//Rutas para zonas
Route::get('/administradores/gestion-copes', [AdministratorsController::class, 'createZones'])->name('administrators.zones.create');
Route::post('/administradores//gestion-copes/store', [AdministratorsController::class, 'storeZones'])->name('administrators.zones.store');

//Rutas para copes
Route::get('/administradores/gestion-zonas', [AdministratorsController::class, 'showCopes'])->name('administrators.copes.create');
Route::post('/administradores/gestion-zona-store', [AdministratorsController::class, 'storeCopes'])->name('administrators.copes.store');
