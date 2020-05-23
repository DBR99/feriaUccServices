<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formationLevel extends Model
{
    protected $table = 'formation_levels';
    protected $fillable = array('name');

}
