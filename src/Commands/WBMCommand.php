<?php

namespace convesto\core\Commands;

use AAU_ITS\WBM_module\Models\WBMOrder;
use Illuminate\Console\Command;
use AAU_ITS\WBM_module\Models\WBMProduct AS Product;

class WBMCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wbm:list {output} {--process=no}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List stuff';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $output  = $this->argument('output');
        $process = $this->option('process');

        if($output == "no-receipt"){

            $orders = WBMOrder::whereDoesntHaveMeta('notes')->get();

            if($process != "no"){
                $this->process($output, $process, $orders);
            }
        }else{
            $this->line('Invalid command...');
        }




    }

    private function process($output, $process, $orders)
    {

    }
}