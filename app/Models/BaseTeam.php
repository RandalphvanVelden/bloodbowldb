<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseTeam extends Model
{
    use HasFactory;

    public function basePlayer(){
        return $this->hasMany(BasePlayer::class);
    }
}
