<?php

namespace App\Models;

use App\Traits\RouteKeyNameTrait;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Slugable;
    use RouteKeyNameTrait;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $slugSourceColumn = 'title';
}
