<?php
namespace App\Models;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    // protected $table = 'categories';

    public function category()
    {
        return $this->belongsTo(Category::class);
        
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
