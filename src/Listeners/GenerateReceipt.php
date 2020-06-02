<?php
namespace AAU_ITS\WBM_module\Listeners;

use AAU_ITS\WBM_module\Events\WBMOrderPlaced;
use AAU_ITS\WBM_module\Services\ReceiptService;
use Illuminate\Support\Facades\Log;

class GenerateReceipt
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
        Log::debug('Generating receipt!');
        $receipt = new ReceiptService($event->order);
        $receipt->generateReceipt();
    }
}
