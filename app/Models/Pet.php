<?php

namespace App\Models;

use App\Traits\FancyTimestamps;
use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

/**
 * Pet model
 * @package App\Models
 *
 * @property string name
 * @property Collection fieldset
 * @property User owner
 * @property Category category
 */
class Pet extends Model
{
    use HasFactory,
        UsesUuidTrait,
        FancyTimestamps;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Category::class);
    }
}
