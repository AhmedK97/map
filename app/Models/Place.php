<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

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

    public function ScopeSearch($query, $request)
    {
        if ($request->category) {
            $query->whereCategory_id($request->category);
        }


        if ($request->address) {
            $query->where('address', 'LIKE', "%$request->address%");
        }

        return $query;
    }
}
