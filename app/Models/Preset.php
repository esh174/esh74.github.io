<?php

namespace App\Models;

use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Preset model
 * @package App\Models
 *
 * @property string title
 */
class Preset extends Model
{
    use HasFactory,
        UsesUuidTrait;


}
