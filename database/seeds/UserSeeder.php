<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data   = [];
        $faker  = Faker\Factory::create();
        $data[] = [
            'name'     => 'Tung',
            'email'    => 'tung@email.com',
            'password' => bcrypt('123456'),
        ];
        $data[] = [
            'name'     => 'Tung 1122',
            'email'    => 'tung2@email.com',
            'password' => bcrypt('123456'),
        ];
        \App\User::query()->truncate();
        foreach ($data as $key => $valData) {
            \App\User::create($valData);
        }
    }
}
