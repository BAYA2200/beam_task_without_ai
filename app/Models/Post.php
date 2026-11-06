<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{      
   protected $fillable = ['name']; 
   use hasFactory;

   public function comment(): HasMany
   {
    return $this->hasMany(Comment::class);
   }
   public function categories()
		{
			return $this->belongsToMany(Category::class, 'category_post', 'post', 'category_id');
		}
}
