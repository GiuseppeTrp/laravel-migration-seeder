<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {// riempio la tabella trains con 200 treni usando i fakers
        for($i = 0; $i < 50; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween(date('Y') . '-01-01', date('Y') + 5 . '-12-31');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween(date('Y') . '-01-01', date('Y') + 5 . '-12-31');
            $newTrain->codice_treno = $faker->bothify('??##?#?#');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();


     }
}
}