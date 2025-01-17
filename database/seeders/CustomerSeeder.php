<?php

namespace Database\Seeders;

use App\Models\Week;
use App\Models\Route;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(50)->forRoute()->create()->each(function (Customer $customer) {
            $quantity = rand(1, 10);
            $week = Week::query()->inRandomOrder()->take($quantity)->get();
            $route = Route::query()->inRandomOrder()->first();
            $customer->weeks()->attach($week);
            $customer->route()->associate($route);
            $customer->save();
        });
    }
}
