<?php
namespace AAU_ITS\WBM_module\Listeners;

use AAU_ITS\WBM_module\Events\WBMOrderPlaced;
use Illuminate\Support\Facades\Log;

class OrderCompleted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(WBMOrderPlaced $event)
    {
        $order = $event->order;
        $order->order_placed_at = date('Y-m-d H:i:s', time());
        $order->save();
    }
}