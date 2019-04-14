<?php

namespace skulyv;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
