<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    use HasFactory;

    protected $fillable = [
        'factionname',
        'type',
        'race'
    ];
    

    public function operator(){
        return $this->hasMany(Operator::class);
    }
}
