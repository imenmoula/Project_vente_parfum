<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    use HasFactory;

    
    
    protected $table = 'parfum';
    protected $fillable=[
        'category_id',
        'nom',
        'description',
        'prix',
        'qte_stock',
        'image', 
        'volume', 
        'genre', 
        'marque', 
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function promotion()
    {

        return $this->hasMany(Promotion::class);
    }
}