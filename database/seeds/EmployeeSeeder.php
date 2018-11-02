<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 100) as $i) {
            Employee::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'address' => $faker->streetAddress,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}