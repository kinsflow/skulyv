<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = [
        'user_id', 'email', 'D.O.B', 'department', 'faculty', 'current_level', 'phone_number','photo_id', 'description', 'degree', 'class_id',
    ];

    protected $hidden = [
        '_token'
    ];

    public function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }

    public function classes()
    {
        return $this->belongsTo(ClassName::class, 'class_id');
    }
}
