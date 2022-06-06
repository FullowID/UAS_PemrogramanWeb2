<?php

namespace Database\Seeders;

use App\Models\OperatorClass;
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
        $this->call(FactionSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(OperatorClassSeeder::class);
    }
}
