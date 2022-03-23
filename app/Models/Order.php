<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";


    protected $fillable = [
        "name",
        "user_id",
    ];
    protected $hidden = [

    ];
    public function user()
    {
        return $this->hasMany(User::class,"user_id","id");
    }
}
