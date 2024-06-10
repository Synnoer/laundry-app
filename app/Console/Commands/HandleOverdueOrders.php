<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Carbon\Carbon;

class HandleOverdueOrders extends Command
{
    protected $signature = 'orders:handle-overdue';
    protected $description = 'Handle overdue orders by extending dates or notifying users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $orders = Order::where('completion_estimation_date', '<', now())
                       ->where('status', '<', 7) // Assuming 7 is the status for complete
                       ->get();

        foreach ($orders as $order) {
            // Extend completion date
            $order->completion_estimation_date = Carbon::now()->addDays(2);
            $order->save();

            $this->info('Handled order ID: ' . $order->id);
        }

        $this->info('Handled overdue orders successfully.');
    }
}