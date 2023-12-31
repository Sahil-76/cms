<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
   
    ];

    protected $dates = ['deleted_at'];

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

   

    // public function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }
}
