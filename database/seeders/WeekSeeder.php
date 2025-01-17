<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $route = Route::query()->inRandomOrder()->first();
        
        Week::factory()->count(20)->hasRoute()->create()->each(function (Week $week) use ($route) {
            $week->route()->associate($route);
            $week->save();
        });
    }
}
