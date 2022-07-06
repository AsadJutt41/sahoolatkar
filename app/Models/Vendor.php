<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['name','photo','cat_id', 'location', 'latitude', 'longitude'];

    // public static function getAllVendor(){
    //     return Vendor::orderBy('id','DESC');
    // }

    public function products(){
        return $this->hasMany('App\Models\Product','brand_id','id')->where('status','active');
    }




}
