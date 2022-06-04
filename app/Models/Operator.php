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
        'description'
    ];

    public function operatorClass() {
        return $this->belongsTo('App\Models\OperatorClass', 'operator_classes_id');
    }
}