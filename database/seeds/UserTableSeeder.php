<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'nguyentuongquy',
            'password' => bcrypt('nguyenquy'),
            'email' => 'quyteoht@gmail.com',
            'fullname' => 'Nguyen Tuong Quy',
            'phone' => '0949763692',
            'address' => 'Ngu Hanh Son, Da Nang',
            'role_id' => 1,
            'created_at' => new DateTime(),
            "updated_at" => new DateTime(), 
        ]);

        factory(User::class, 5)->create();
    }
}
