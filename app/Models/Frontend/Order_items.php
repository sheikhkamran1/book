<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;

    
    protected $table = 'order_items';
    protected $fillable = [
        'user_id',
        'order_id',
        'prod_id',
        'qty',
        'price',
    ];
}
