<?php
namespace convesto\core\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

abstract class CoreTag extends Model
{
    public function organization()
    {
        return $this->belongsTo('App\Organization', 'id', 'organization_id');
    }
}
