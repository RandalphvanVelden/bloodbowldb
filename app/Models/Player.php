<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

protected $guarded = ['id']; // welke velden er niet mogen worden ingevult mass assign
// protected $fillable = ['name', 'position'];//welke velden er mogen worden ingevult mass assign

public function team()
{
    return $this->BelongsTo(Team::class);
}
public function skills(){
    return $this->hasMany(Skills::class);
}
public function primary(){
    return $this->hasMany(Primary::class);
}
public function secondary(){
    return $this->hasMany(Secondary::class);
}
}