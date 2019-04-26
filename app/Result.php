<?php

namespace skulyv;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'user_id', 'course_code', 'course_title', 'ca1', 'ca2', 'exam', 'year'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
