<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $nuovo_studente = new Student();
            $nuovo_studente->nome = $faker->firstname;
            $nuovo_studente->cognome = $faker->lastname;
            $nuovo_studente->matricola = $faker-> unique()-> numberBetween($min = 1000, $max = 9000);
            $nuovo_studente->email= $faker->unique()->email;
            $nuovo_studente->save();
        }
    }
}
