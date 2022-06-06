<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Race;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Race::create([
            'name' => 'Aegir',
            'description' => 'All Aegir come from the oceans beyond the known world of Terra. On land, the Aegirs have to face the issues of dry skin. If left untreated, they will face severe symptoms like allegic reactions and chafing. As a matter of fact, they always make sure that their skin is moist all the time, such as carrying a small bottle of water as moisturizer.'

        ]);

        Race::create([
            'name' => 'Cautus',
            'description' => 'Cautuses have the traits of leporids (rabbits and hares), which can be seen from the shape of their ears. They do have tails, which is largely unnoticeable due to the short length.

            Most Cautuses are born in Rim Billiton. '
        ]);

        Race::create([
            'name' => 'Feline',
            'description' => 'Felines have the traits of feliforms, which includes domestic cats (Felis sp.), non-domestic cats including big cats (Panthera sp.) except lions (who are classified as Aslan instead) and mongooses. Their feliform traits are visible from the shape of their ears and tail, and their reputation as stealthy prowlers.'
        ]);

        Race::create([
            'name' => 'Forte',
            'description' => 'Fortes have the traits of artiodactyls or even-toed ungulates, which includes bovines and camelids. For the former, their bovine traits can be seen from the shape of their horns. For the latter, their camelid traits can be seen from the shape of their ears and they have the ability to survive in hot arid deserts.

            Most Fortes are known to be born in Minos'
        ]);

        Race::create([
            'name' => 'Kuranta',
            'description' => 'Kurantas have the traits of horses (Equus caballus), which also includes zebras. Their equine traits can be seen from the shape of their ears and their ability to run at high speeds with little to no fatigue.

            Most Kurantas are known to be born in Kazimierz'
        ]);

        Race::create([
            'name' => 'Sarkaz',
            'description' => "Most Sarkaz are known to be born in Kazdel. They are more susceptible to Oripathy than other races, but this is both a blessing and a curse as Sarkaz's vulnerability to Oripathy allows them to both use and resist Originium Arts better. One notable application of such is an ancient Arts ritual using an Originium Altar to generate waves of harmful, pure Originium energy, often referred to as a 'witchcraft' or 'cannibalism'. As a consequence, it is said that Sarkaz value death more than other races while believing that it is their only requiem; they could even easily sense others' decease the moment someone dies."
        ]);
    }
}
