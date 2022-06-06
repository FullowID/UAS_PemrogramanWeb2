<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'classname',
        'position',
        'description'
    ];
    

    public function operator(){
        return $this->hasMany(Operator::class);
    }
}
