<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/images/' . $value);
        } else {
            return asset('storage/images/default.png');
        }
    }
}
