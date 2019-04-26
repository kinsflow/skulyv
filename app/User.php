<?php

namespace skulyv;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'role', 'last_name', 'middle_name', 'email', 'password', 'class_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profiles()
    {
        return $this->hasOne(Profile::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'user_id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }
    public function class()
    {
        return $this->belongsTo(ClassName::class, 'class_id');
    }
    public  function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }
    public function role()
    {
        if($this->role == 1)
        {
            return true;
        }
        return false;
    }




}
