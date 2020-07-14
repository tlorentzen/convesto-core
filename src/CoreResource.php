<?php
namespace convesto\core\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

abstract class CoreResource extends Model
{

    public function users()
    {
        return $this->hasMany('App\User', 'resource_id', 'id');
    }

}
