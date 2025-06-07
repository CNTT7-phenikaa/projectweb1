<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;

    protected $fillable = [//gán hàng loạt
        'name',
        'email',
        'password',
        'phone_number',
        'avatar',
        'address',
        'role_id',
        'activation_token',
        'google_id'        
    ];

    protected $hidden = [
        'password',
        'remeber_token',
    ];

    protected function casts(){
        return [
            'email_verified_at'     => 'datetime',
            'password'      => 'hashed',
        ];
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function shippingAddress(){
        return $this->hasMany(shippingAddress::class);
    }


    //check status

    public function isPending(){
        return $this->status == 'pending';
    }

    public function isActive(){
        return $this->status == 'active';
    }
    public function isBanned(){
        return $this->status == 'banned';
    }
    public function isDeleted(){
        return $this->status == 'deleted';
    }



}
