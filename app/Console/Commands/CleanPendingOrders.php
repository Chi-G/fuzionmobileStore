<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class CleanPendingOrders extends Command
{
    protected $signature = 'orders:clean-pending';
    protected $description = 'Delete pending orders older than 24 hours';

    public function handle()
    {
        $count = Order::where('status', 'pending')
            ->where('created_at', '<', now()->subHours(24))
            ->delete();
        $this->info("Deleted $count pending orders.");
    }
}
