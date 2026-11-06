<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Passport extends Model
{
     protected $fillable = ['surname','name','patronymic'];

    public function person(): HasOne
    {
        return $this->HasOne(Person::class,  "person_id");

    }
}
