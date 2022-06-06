<?php

namespace Database\Seeders;

use App\Models\OperatorClass;
use Illuminate\Database\Seeder;

class OperatorClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperatorClass::create([
            'classname' => 'Caster',
            'position' => 'Ranged',
            'description' => 'Casters attack enemies with their Originium Arts, dealing Arts damage instead of the usual Physical damage. This makes Casters a viable option when facing enemies with high DEF as they typically have little to no RES.'

        ]);

        OperatorClass::create([
            'classname' => 'Defender',
            'position' => 'Melee',
            'description' => 'Defenders have high HP and DEF and can block up to three enemies, with few exceptions. However, they have low ATK and (with certain exceptions) a very short attack range – on the same tile as themselves. For this reason, Defenders are best placed in front of a formation to hold enemies back, draw enemy fire, and protect friendly units behind them.'

        ]);

        OperatorClass::create([
            'classname' => 'Guard',
            'position' => 'Melee',
            'description' => 'Guards have high HP and ATK which gives them high DPS output. They often have good synergy with the other classes, especially Defenders who can block enemies to be pummeled by Guards or with each other to deal even more damage with coordinated attacks.'

        ]);

        OperatorClass::create([
            'classname' => 'Medic',
            'position' => 'Ranged',
            'description' => 'Instead of attacking enemies, Medics restore the HP of friendly units, making their use indispensable to keeping friendlies on the field and gives them more time to hold the line. Medics restore HP equal to their ATK.'

        ]);
    }
}
