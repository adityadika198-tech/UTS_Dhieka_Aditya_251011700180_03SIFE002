<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Craft extends Model
{
    protected $fillable = [
        'name',
        'artisan',
        'material',
        'price',
        'description',
        'image',
    ];
}
