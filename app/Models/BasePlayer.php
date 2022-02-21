<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasePlayer extends Model
{
    use HasFactory;

public function baseTeam(){
    return $this->belongsTo(BaseTeam::class);
}

public function baseSkills(){
    return $this->hasMany(BaseSkills::class);
}
public function basePrimary(){
    return $this->hasMany(BasePrimary::class);
}
public function baseSecondary(){
    return $this->hasMany(BaseSecondary::class);
}
}