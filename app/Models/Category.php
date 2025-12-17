<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'slug'];


    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
