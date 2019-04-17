<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'pathToImage',
        'description',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
