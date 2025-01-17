<?php

namespace App\Models;

use App\Models\Week;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    public function weeks(): BelongsToMany
    {
        return $this->belongsToMany(Week::class, 'active_week_customer', 'customer_id', 'week_id');
    }

    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class);
    }
}
