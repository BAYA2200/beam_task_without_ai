<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{   
    protected $fillable = ['course_name'];

     public function teacher(): BelongsTo
    {
        return $this->BelongsTo(Teacher::class, "teacher_id");
    }
}
