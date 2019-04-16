<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /*
      ///- alternativa que achei para apagar os produtos relacionados a marca
      ///- mas depois resolvi o problema no bd mesmo....

    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
             $user->products()->delete();
        });
    }
    */
}
