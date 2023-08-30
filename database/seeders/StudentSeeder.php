<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $student = new Student();
            $student->first_name = $faker->firstName();
            $student->last_name = $faker->lastName();
            $student->birth = $faker->dateTime();
            $student->city = $faker->city();
            $student->save();
        }
    }
}
