<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function assignedBadges()
    {
        return $this->belongsToMany(Badge::class, 'people_badges', 'person_id', 'badge_id')
        ->withTimestamps();
    }
}
