<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait HasSlug
{
    public static function BootHasSlug()
    {
        static::creating(function ($model) {
            if(Schema::hasColumn($model->getTable(), 'slug')){
                $model->slug = Str::slug($model->name);
            }
        });
    }
}
