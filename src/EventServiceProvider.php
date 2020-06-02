<?php

namespace convesto\core;

use AAU_ITS\WBM_module\Events\WBMCallback;
use AAU_ITS\WBM_module\Events\WBMOrderCanceled;
use AAU_ITS\WBM_module\Events\WBMOrderPaid;
use AAU_ITS\WBM_module\Events\WBMOrderPlaced;
use AAU_ITS\WBM_module\Listeners\GenerateReceipt;
use AAU_ITS\WBM_module\Listeners\OrderCompleted;
use AAU_ITS\WBM_module\Listeners\CallbackLogging;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        WBMOrderPlaced::class => [
            OrderCompleted::class,
            GenerateReceipt::class,
        ],
        WBMCallback::class => [
            CallbackLogging::class
        ]
    ];
}