<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Item extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
            'title',
            'price',
            'description',
            'royalty',
            'user_id',
            'category_id',
            'collection_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function collection():BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function likes() : MorphMany
    {
        return $this->morphMany(like::class, 'likeable');
    }
}
