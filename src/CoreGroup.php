<?php
namespace convesto\core\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

abstract class CoreGroup extends Model
{
    public function users(){
        return $this->belongsToMany('App\User', 'group_users', 'user_id', 'group_id');
    }
}
