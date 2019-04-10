<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
