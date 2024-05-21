<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderLine extends Model
{
    use HasFactory;
   protected $table='order_line';
   protected $fillable=[
        'order_id',
        'parfum_id',
       'qty',
      'prixunitaire',
      'total',
        
   ];
   public function order()
   {
       return $this->belongsTo(order::class);
   }
   public function parfum()
   {
       return $this->belongsTo(parfum::class);
   }

   
   
}
