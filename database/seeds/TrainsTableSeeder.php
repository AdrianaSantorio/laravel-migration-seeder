<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Firenze',
                'arrival_station' => 'Roma',
                'departure_time' => '16:50:00',
                'arrival_time' => '18:10:00',
                'train_code' => '2217',
                'number_of_carriages' => '8',
                'on_time' => 0,
                'cancelled' => 0,
            ],
            [
                'company' => 'ITALO',
                'departure_station' => 'Roma',
                'arrival_station' => 'Napoli',
                'departure_time' => '07:10:00',
                'arrival_time' => '08:50:00',
                'train_code' => '9910',
                'number_of_carriages' => '11',
                'on_time' => 0,
                'cancelled' => 1,
            ],
            [
                'company' => 'SVG',
                'departure_station' => 'Milano',
                'arrival_station' => 'Parigi',
                'departure_time' => '12:55:00',
                'arrival_time' => '20:30:00',
                'train_code' => '98473',
                'number_of_carriages' => '12',
                'on_time' => 1,
                'cancelled' => 0,
            ],
            [
                'company' => 'TRENITALIA',
                'departure_station' => 'Roma',
                'arrival_station' => 'Bologna',
                'departure_time' => '11:00:00',
                'arrival_time' => '13:50:00',
                'train_code' => '7932',
                'number_of_carriages' => '10',
                'on_time' => 1,
                'cancelled' => 0,
            ],

        ];

        foreach ($trains as $train) {
            $new_train = new Train();

            $new_train->company = $train['company'];
            $new_train->departure_station = $train['departure_station'];
            $new_train->arrival_station = $train['arrival_station'];
            $new_train->departure_time = $train['departure_time'];
            $new_train->arrival_time = $train['arrival_time'];
            $new_train->train_code = $train['train_code'];
            $new_train->number_of_carriages = $train['number_of_carriages'];
            $new_train->on_time = $train['on_time'];
            $new_train->cancelled = $train['cancelled'];

            $new_train->save();
        }
    }
}
