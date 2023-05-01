<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductM extends Model
{
    use HasFactory;
     protected $table='_product';
    protected $fillable=[
        'title',
        'price',
        'image',
        'name'
    ];
}
