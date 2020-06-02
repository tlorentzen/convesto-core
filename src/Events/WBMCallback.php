<?php
namespace AAU_ITS\WBM_module\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;

class WBMCallback
{
    use SerializesModels;

    public $order;
    public $type;
    public $data;

    public function __construct(Order $order, $type, $data)
    {
        $this->order = $order;
        $this->type = $type;
        $this->data = $data;
    }
}