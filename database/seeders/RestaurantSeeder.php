<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rn1 = new Restaurant();
        $rn1->name = "Pizza Jazz";
        $rn1->town = "Kaunas";
        $rn1->address = "Savanoriu pr. 8, Kaunas";
        $rn1->hours = "08:00-22:00";
        $rn1->save();

        $rn2 = new Restaurant();
        $rn2->name = "Sushi restaurant";
        $rn2->town = "Vilnius";
        $rn2->address = "Laisves pr. 8, Vilnius";
        $rn2->hours = "12:00-23:00";
        $rn2->save();

        $rn3 = new Restaurant();
        $rn3->name = "Best restaurant";
        $rn3->town = "Klaipėda";
        $rn3->address = "Klaipėdos pr. 8, Klaipeda";
        $rn3->hours = "11:00-20:00";
        $rn3->save();
    }
}
