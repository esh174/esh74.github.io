<?php

namespace App\Models;

use App\Traits\FancyTimestamps;
use App\Traits\UsesUuidTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Message model
 * @package App\Models
 *
 * @property User sender
 * @property User receiver
 * @property string text
 */
class Message extends Model
{
    use HasFactory,
        UsesUuidTrait,
        FancyTimestamps;

    public function sender(): HasOne
    {
        return $this->hasOne(related: User::class, localKey: 'sender_id');
    }

    public function receiver(): HasOne
    {
        return $this->hasOne(related: User::class, localKey: 'receiver_id');
    }
}
