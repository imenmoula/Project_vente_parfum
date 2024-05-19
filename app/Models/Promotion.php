<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $table='promotion';
    protected $filable=[
            'parfum_id',
           'category_id',
            'nom_promotio',
            'description',
           'date_debut',
            'date_fin',
            'pourcentage',
          
    ];

    public function parfum()
    {
        return $this->belongsTo(Parfum::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
