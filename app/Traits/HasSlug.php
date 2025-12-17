<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait HasSlug
{
    public static function bootHasSlug()
    {
        static::saving(function ($model) {
            if (
                Schema::hasColumn($model->getTable(), 'slug') &&
                empty($model->slug) &&
                !empty($model->name)
            ) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
}
