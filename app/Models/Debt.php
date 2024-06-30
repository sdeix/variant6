<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $fillable = ['subscriber_id', 'subscription_fee', 'per_minute_fee'];

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
    public $timestamps = false;
}