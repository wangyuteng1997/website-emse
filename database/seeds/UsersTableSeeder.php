<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => "yuteng.wang",
            'email'    => 'yuteng.wang@etu.emse.fr',
            'password' => bcrypt('19970924'),
            'role'     => 'master',
            'student_code' => 0000000,
            'active'   => 1,
            'verified' => 1,
        ]);

        factory(User::class, 10)->states('admin')->create();
        factory(User::class, 30)->states('teacher')->create();
        factory(User::class, 200)->states('student')->create();
    }
}
