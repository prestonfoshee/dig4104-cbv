<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candles() {
        return $this->hasMany(Candle::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
