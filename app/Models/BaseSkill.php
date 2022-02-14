<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseSkill extends Model
{
    use HasFactory;

    public function basePlayer(){
        return $this->belongsTo(BasePlayer::class);
    }
}
