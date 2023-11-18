<?php

namespace App\Gradee;

use Illuminate\Database\Eloquent\Model;

class Gradee extends Model 
{

    protected $fillable =['name', 	'Notes'];
    protected $table = 'Grades';
    public $timestamps = true;

}