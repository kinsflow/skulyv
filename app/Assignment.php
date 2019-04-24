<?php

namespace skulyv;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function classes()
    {
        return $this->belongsTo(ClassName::class);
    }

    protected $fillable = [
        'class_name_id',
        'file_path'
    ];


    public function class()
    {
        return $this->belongsTo(ClassName::class, 'class_name_id');
    }
}
