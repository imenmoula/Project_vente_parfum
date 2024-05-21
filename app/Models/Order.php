<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='order';
    protected $fillable=[
        
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'rue',
        'message',
        'status',
        'payed',
        'date',
       'delivred',
       'netpaye',
    ];
    public function orderLine(){
        return $this->hasMany(orderLine::class,'order_id','id');
    }
}
