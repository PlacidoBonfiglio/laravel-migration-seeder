<?php

namespace Database\Seeders;

use App\Models\Machinist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MachinistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ( $i=0; $i < 20; $i++ ) {
            $newMachinist = new Machinist();
            $newMachinist->first_name = $faker->firstName();
            $newMachinist->last_name = $faker->lastName();
            $newMachinist->date_of_birth = $faker->dateTimeBetween("-60 years", "-25 years");
            $newMachinist->country = $faker->country();
            $newMachinist->save();
        }
    }
}
