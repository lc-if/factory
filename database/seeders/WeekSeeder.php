<?php

namespace Database\Seeders;

use App\Models\Week;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        Week::factory()->count(30)->create()->each(function (Week $week) {
            $quantity = rand(1, 50);
            $customers = Customer::query()->inRandomOrder()->take($quantity)->get();
            $week->customers()->attach($customers);
            $week->save();
        });
    }
}
