<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'student_id');
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
