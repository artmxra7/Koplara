<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
          DB::table('user')->insert([
            'user_code' => 'KOP-03',
            'user_name' => 'admin1',
            'user_email' => 'admin1@admin.com',
            'user_password' => bcrypt('admin123'),
        ]);
        /* $faker = Faker::create('id_ID');

        foreach (range(1, 10) as $index) {
            DB::table('user')->insert([
                'user_name' => 'ID'.' '.$faker->name,
                'user_email' => $faker->email,
            ]);
        } */
    }
}
