<?php
namespace AAU_ITS\WBM_module\Listeners;

use AAU_ITS\WBM_module\Events\WBMCallback;
use Illuminate\Support\Facades\Log;
use DB;

class CallbackLogging
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
    public function handle(WBMCallback $event)
    {
        DB::table('wbm_log')->insert(
            [
                "order_id" => $event->order->id,
                "from" => "dibs",
                "to" => "shop",
                "type" => $event->type,
                "content" => json_encode($event->data),
                "ip" => ""
            ]
        );
    }
}