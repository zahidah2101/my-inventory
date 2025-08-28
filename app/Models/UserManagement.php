<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserManagement extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //getter make sure user is loaded
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    } 

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
