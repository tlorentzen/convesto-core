<?php
namespace AAU_ITS\WBM_module\Events;

use AAU_ITS\WBM_module\Models\WBMOrder;
use App\Order;
use Illuminate\Queue\SerializesModels;

class WBMOrderCanceled
{
    use SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}