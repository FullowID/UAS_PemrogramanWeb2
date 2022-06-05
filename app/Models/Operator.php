<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'codename',
        'operator_classes_id',
        'factions_id',
        'races_id',
        'description'
    ];

    public function operatorClass() {
        return $this->belongsTo('App\Models\OperatorClass', 'operator_classes_id');
    }

    public function faction(){
        return $this->belongsTo('App\Models\Faction', 'factions_id');
    }

    public function race(){
        return $this->belongsTo('App\Models\Race', 'races_id');
    }
}