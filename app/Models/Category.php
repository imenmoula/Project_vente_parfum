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
    public function parfum()
    {
        return $this->hasMany(Parfum::class,'category_id','id');
    }
    public function promotion()
    {
        return $this->hasMany(Promotion::class,'category_id','id');
    }
}
