<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProjectFeature extends Model
{
    /** @var list<string> */
    protected $fillable = [
        'title',
        'category',
        'description',
        'icon',
        'sort_order',
    ];

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }
}
