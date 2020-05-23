<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    protected $table = 'visitors';
    protected $fillable = array('name','lastName','typeDocument','numberDocument','email','phone','idFormationLevel','idProgram');

}
