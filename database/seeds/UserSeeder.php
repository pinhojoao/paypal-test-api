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
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@janedoe.com',
                'phone_number' => '(712) 555-2112',
                'country' => 'US',
                'state' => 'NY',
                'city' => 'New York',
                'address' => '199 Lafayette Street',
                'zip' => '10012',
                'password' => bcrypt('123456')
            ]
        ]);
    }
}
