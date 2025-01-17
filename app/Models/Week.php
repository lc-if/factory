<?php

namespace App\Models;

use App\Models\Customer;
use App\Enums\WeekStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Week extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'status',
        'year'
    ];

    public $casts = [
        'status' => WeekStatus::class,
        'year' => 'integer'
    ];

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, 'active_week_customer', 'week_id', 'customer_id');
    }
}
