<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable=[

        'nom',
        'description',
        'image',
        'date_creation',
        'date_update',
        'status',
       'sexe',

    ];
}
