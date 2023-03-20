<?php

namespace Database\Seeders;

use App\Models\Shop;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShopSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Shop::create([
            'Name' => "ChairNow",
            'Value' => 0,
        ]);

        Shop::create([
            'Name' => "WaitNow",
            'Value' => 0,
        ]);

        Shop::create([
            'Name' => "OnlineStatus",
            'Value' => 0,
        ]);

    }
}
