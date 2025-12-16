<?php

namespace App\Traits\Traits;

trait HasScope
{
    public function scopeSearch(string $query, string $column)
    {
        return $query->when(request()->search, function($search) use ($column){
            $search->where($column, 'like', '%'. request()->search . '%');
        });
    }
}
