<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elecronics extends Model
{
    use HasFactory;

    protected $fillable = ['name',
    'description', 'price', 'stock',
    'file_path', 'brand_id', 'category_id'];

}
