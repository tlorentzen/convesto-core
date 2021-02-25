<?php
namespace convesto\core\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

abstract class CoreOrganization extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'organization_users', 'user_id', 'organization_id');
    }

    public function resources()
    {
        return $this->hasMany('App\Resource', 'organization_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag', 'organization_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany('App\Group', 'organization_id', 'id');
    }
}
