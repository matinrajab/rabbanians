<?php

namespace App\Models;

use App\Traits\RouteKeyNameTrait;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OpenVolunteer extends Model
{
    use HasFactory;
    use Slugable;
    use RouteKeyNameTrait;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $slugSourceColumn = 'program_name';

    public function volunteerType(): BelongsTo
    {
        return $this->belongsTo(VolunteerType::class);
    }
}
