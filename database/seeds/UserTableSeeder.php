<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

  public function run()
  {
    $faker = Factory::create();
    for ($i = 0; $i < 5; $i++) {
      User::create([
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'password' => bcrypt('password'),
      ]);
    }
  }
}
