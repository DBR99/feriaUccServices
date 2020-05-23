<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = 'programs';
    protected $fillable = array('name','idLevelFormation');

}
