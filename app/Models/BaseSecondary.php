<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseSecondary extends Model
{
    use HasFactory;

    public function basePlayer(){
        return $this->BelongsTo(BasePlayer::class);
    }
}
