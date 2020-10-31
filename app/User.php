<?php

namespace App;

use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWallet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements Wallet
{
    use Notifiable, HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','country','role_id'
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

    public function jobs()
    {
        return $this -> hasMany(Job::class);
    }
    public function proposals()
    {
        return $this -> hasMany(JobProposal::class);
    }

//    public function getRoleAttribute()
//    {
//        if($this->role_id == 1)
//        {
//            return 'admin';
//        }elseif($this->role_id == 2)
//        {
//            return 'freelancer';
//        }else {
//            return 'client';
//        }
//    }
}
