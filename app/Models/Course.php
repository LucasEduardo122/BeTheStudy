<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $table =  'courses';

    public function setUriAttribute($value){
        $this->attributes['uri'] = Str::slug($value);
    }
}
