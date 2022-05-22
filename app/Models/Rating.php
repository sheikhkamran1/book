<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    public $fillable = [
        'user_id',
        'prod_id',
        'stars_rated'
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

}
