<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faction;

class FactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faction::create([
            'factionname' => 'Rhodes Island',
            'type' => 'Pharmaceutical corporation'
        ]);

        Faction::create([
            'factionname' => 'Aegir',
            'type' => 'Technocracy'
        ]);

        Faction::create([
            'factionname' => 'Ursus',
            'type' => 'Imperial monarchy'
        ]);

        Faction::create([
            'factionname' => 'Laterano',
            'type' => 'Theocratic city-state'
        ]);

        Faction::create([
            'factionname' => 'Higashi',
            'type' => 'Shogunate'
        ]);

        Faction::create([
            'factionname' => 'Columbia',
            'type' => 'Federal republic'
        ]);
    }
}
