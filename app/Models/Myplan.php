<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'invest_id',
        'plan_name',
        'invested_amount',
        'profit_earned',
        'daily_profit',
        'total_return',
        'start_date',
        'end_date',
        'status',
        'tenure',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
