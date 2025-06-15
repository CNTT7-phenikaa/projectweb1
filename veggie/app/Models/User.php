<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements CanResetPasswordContract
{
    use HasFactory, CanResetPassword, Notifiable;

    protected $fillable = [
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
        'remember_token', // bạn viết sai thành `remeber_token`
    ];

    protected function casts(){
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function shippingAddress(){
        return $this->hasMany(ShippingAddress::class); // viết hoa đúng class
    }

    // Các phương thức kiểm tra trạng thái
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

    public function getAvatarUrlAttribute(){
        return $this->avatar ? asset('storage/'. $this->avatar) : asset('storage/uploads/users/avatar-default-icon-1975x2048-2mpk4u9k.png');
    }
}
