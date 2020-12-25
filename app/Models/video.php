<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class video extends Model
{
    use HasFactory;

    protected $table = "video";

    public function setUriAttribute($value) {
        $this->attributes['uri'] = Str::slug($value);
    }
}
