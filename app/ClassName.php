<?php

namespace skulyv;

use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    //
    public function staffs()
    {
        return $this->hasOne(Staff::class, 'staff_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'class_name_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
