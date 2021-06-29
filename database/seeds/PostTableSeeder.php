<?php

use App\Post;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Factory::create();

    for ($i = 0; $i < 1000; $i++) {
      Post::create([
        'title' => $faker->sentence(2),
        'body' => $faker->sentence(22),
        'user_id' => User::all()->random()->id
      ]);
    }
  }
}
