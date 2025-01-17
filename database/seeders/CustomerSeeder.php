<?php

namespace Database\Seeders;

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
            $route = Route::query()->inRandomOrder()->first();
            $customer->route()->associate($route);
            $customer->save();
        });
    }
}
