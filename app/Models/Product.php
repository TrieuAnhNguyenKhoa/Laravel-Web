<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function cart()
{
    return $this->hasMany(Cart::class);
}
    use HasFactory;
    protected $table ='products';
    public $timestamps = false;
    protected $fillable=[
        'slide_url','title','price',
    ];
}
