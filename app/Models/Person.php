<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Passport;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{   
    protected $table = 'persons';
    use hasFactory;
    protected $fillable = ['name']; 
    

    public function passport(): BelongsTo
   {
            return $this->BelongsTo(Passport::class);

   }
}
