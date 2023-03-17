<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Add this if using a custom table name other than `products`:
    // protected $table = 'custom_products';
    protected $fillable = ['title', 'description', 'price', 'availability'];

}
