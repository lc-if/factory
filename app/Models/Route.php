<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
