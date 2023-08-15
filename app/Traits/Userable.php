<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Userable
{
    protected static function bootUserable()
    {
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', auth()->id()); // or retrieve the user ID from your authentication logic
        });
    }
}
