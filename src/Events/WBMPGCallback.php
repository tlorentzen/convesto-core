<?php
namespace AAU_ITS\WBM_module\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;

class WBMPGCallback
{
    use SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}