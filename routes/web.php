<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Week;
use App\Models\Route as RouteModel;
use Inertia\Inertia;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $customer = Customer::query()->get();
    $week = Week::query()->get();
    $route = RouteModel::query()->get();
    return Inertia::render('DashboardView', [
        'customer' => $customer,
        'week' => $week,
        'route' => $route
    ]);
});
