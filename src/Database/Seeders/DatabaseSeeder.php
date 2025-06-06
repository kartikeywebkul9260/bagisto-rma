<?php

namespace Webkul\RMA\Database\Seeders;

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
        $this->call(DefaultReasons::class);

        $this->call(RMAConfiguration::class);

        $this->call(RMAStatusDataSeed::class);
    }
}