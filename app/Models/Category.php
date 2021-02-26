<?php

namespace App\Models;

use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Collection as EloCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

/**
 * Category model
 * @package App\Models
 *
 * @property string title
 * @property Collection setup
 * @property EloCollection pets
 */
class Category extends Model
{
    use HasFactory,
        UsesUuidTrait;

    public function pets(): BelongsTo
    {
        return $this->belongsTo(related: Pet::class);
    }
}
