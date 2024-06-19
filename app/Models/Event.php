<?php

namespace App\Models;

use App\Traits\RouteKeyNameTrait;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    use Slugable;
    use RouteKeyNameTrait;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $slugSourceColumn = 'name';

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
