<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'user_id', 'id');
    }
}
