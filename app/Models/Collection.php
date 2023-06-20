<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Collection extends Model
{
    use HasFactory;

    public function user():HasMany
    {
        return $this->hasMany(User::class);
    }

    public function item():HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function likes() : MorphMany
    {
        return $this->morphMany(like::class, 'likeable');
    }
}
