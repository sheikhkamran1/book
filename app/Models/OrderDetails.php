<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public function user_id()
    {
        return $this->belongsTo(user_id::class);
    }

    protected $table = 'orders';
    protected $fillable = [
        'name',
        'email',
        'number',
        'order_address',
        'country',
        'pin_code',
    ];
}
