<?php

use App\Train;
use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $train_1= new Train();

        $train_1->company = 'Italo Treno';
        $train_1->departure_destination = 'Milano Centrale';
        $train_1->arrival_destination = 'Roma Termini';
        $train_1->departure_time = '2022-09-12 15:10:00';
        $train_1->arrival_time =  '2022-09-12 20:06:';
        $train_1->train_code = '100';
        $train_1->carriage_number = '2';
        $train_1->isTrainOnTime = true;
        $train_1->isTrainCancelled = false;

        $train_1->save();

        $train_2= new Train();

        $train_2->company = 'Trenitalia';
        $train_2->departure_destination = 'Venezia Santa Lucia';
        $train_2->arrival_destination = 'Verona Porta Nuova';
        $train_2->departure_time = '2022-09-12 16:23:00';
        $train_2->arrival_time = '2022-09-12 18:08:00';
        $train_2->train_code = '101';
        $train_2->carriage_number = '4';
        $train_2->isTrainOnTime = true;
        $train_2->isTrainCancelled = false;

        $train_2->save();

        $train_3= new Train();

        $train_3->company = 'Trenitalia';
        $train_3->departure_destination = 'Padova';
        $train_3->arrival_destination = 'Firenze Santa Maria Novella';
        $train_3->departure_time = '2022-09-12 07:30:00';
        $train_3->arrival_time =  '2022-09-12 10:30:00';
        $train_3->train_code = '100';
        $train_3->carriage_number = '2';
        $train_3->isTrainOnTime = true;
        $train_3->isTrainCancelled = false;

        $train_3->save();

        $train_4= new Train();

        $train_4->company = 'Italo Treno';
        $train_4->departure_destination = 'Bologna Centrale';
        $train_4->arrival_destination = 'Roma Tiburtina';
        $train_4->departure_time =  '2022-09-12 13:45:00';
        $train_4->arrival_time =  '2022-09-12 16:17:00';
        $train_4->train_code = '100';
        $train_4->carriage_number = '2';
        $train_4->isTrainOnTime = true;
        $train_4->isTrainCancelled = false;

        $train_4->save();

    }
}
