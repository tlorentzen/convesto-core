<?php
namespace convesto\core\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

abstract class CoreUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function gravatar($size=50){
        return 'https://www.gravatar.com/avatar/'.md5( strtolower( trim( $this->email ) ) )."?s=$size&d=mp&r=g";
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group', 'group_users', 'user_id', 'group_id');
    }

    public function resource()
    {
        return $this->belongsTo('App\Resource', 'resource_id', 'id');
    }

}