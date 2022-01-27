<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function assignedPeople()
    {
        return $this->belongsToMany(Person::class, 'people_badges', 'badge_id', 'person_id')
        ->withTimestamps();
    }
}
