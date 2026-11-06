<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{   
     protected $fillable = ['first_name','last_name'];

    public function course(): HasMany
   {
    return $this->hasMany(Course::class);
   }
}
