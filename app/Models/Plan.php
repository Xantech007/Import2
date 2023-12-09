<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'daily_interest',
        'tenure',
        'min_deposit',
        'max_deposit',
        'deposit_return',
        'total_return'
    ];
}
