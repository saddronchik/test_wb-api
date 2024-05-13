<?php

namespace Database\Seeders;

use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Income::factory(500)->create();
        Order::factory(500)->create();
        Sale::factory(500)->create();
        Stock::factory(500)->create();
    }
}
