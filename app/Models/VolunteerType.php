<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VolunteerType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function openVolunteers(): HasMany
    {
        return $this->hasMany(OpenVolunteer::class);
    }
}
