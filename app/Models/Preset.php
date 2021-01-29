<?php

namespace App\Models;

use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preset extends Model
{
    use HasFactory,
        UsesUuidTrait;
}
