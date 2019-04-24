<?php

namespace skulyv;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['user_id', 'title', 'body', 'photo_id'];

    public function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id', 'id');
    }

}

