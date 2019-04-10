<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [
        'file_path',
    ];

    public  function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
