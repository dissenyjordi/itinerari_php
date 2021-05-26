<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens; // New line, Laravel8 passport install. 13.05.2021 - jpm //

class User extends Authenticatable
{
    //use HasFactory, Notifiable; // // Original, Disable line, Laravel8 passport install. 13.05.2021 - jpm //
    use HasApiTokens, HasFactory, Notifiable; // New line, Laravel8 passport install. 13.05.2021 - jpm //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}