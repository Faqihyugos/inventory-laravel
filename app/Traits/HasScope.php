<?php

namespace App\Traits;
use \Illuminate\Database\Eloquent\Builder;

trait HasScope
{

    public function scopeSearch(Builder $query, string $column)
    {
        $query->when(request()->search, function (Builder $q) use ($column) {
            $q->where($column, 'like', '%'. request()->search . '%');
        });

        return $query;
    }
}
