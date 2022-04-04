<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    const IS_ADMIN = 1;
    const USER_ACTIVE = 1;
    const USER_UNACTIVE = 0;
    const DB_TABLE = 'users';

    protected $table = self::DB_TABLE;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'isActive',
        'isAdmin',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    
    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
    
    public function setUsernameAttributes($username){
        $this->attributes['username'] = Str::slug($username);
    }
    
    public function isAdmin()
    {
        return $this->isAdmin === self::IS_ADMIN;
    }
    
    public function isActive()
    {
        return $this->isActive === self::USER_ACTIVE;
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}
