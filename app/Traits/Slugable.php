<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    protected static function bootSlugable()
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->{$model->getSlugSourceColumn()});
        });

        static::updating(function ($model) {
            if ($model->isDirty($model->getSlugSourceColumn())) {
                $model->slug = Str::slug($model->{$model->getSlugSourceColumn()});
            }
        });
    }

    protected function getSlugSourceColumn()
    {
        return $this->slugSourceColumn;
    }
}
