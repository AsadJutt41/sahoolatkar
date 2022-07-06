<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instalment extends Model
{
    public $fillable = ['product_id', 'instalment_duration', 'advanced_payment', 'instalment_price'];

    public function products(){
        return $this->belongsToMany(Product::class,'product_id');
    }

}
