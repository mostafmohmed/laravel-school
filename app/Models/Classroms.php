<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroms extends Model
{
    use HasFactory;
    
    public function grade()
    {
        return $this->belongsTo(Grade::class,'Garde_id');
    }
}
