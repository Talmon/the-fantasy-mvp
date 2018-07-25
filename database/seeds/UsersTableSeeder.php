<?php

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
       $user =  \App\User::create([
            'name' => 'Talmon',
            'email' => 'talimwakesi@gmail.com',
            'password' => bcrypt('P@55w0rd!'),
            'admin' => 1
        ]);

        $user->save();

        \App\Profile::create([
            'avatar' => '/img/avatars/talmon.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ipsum laborum odit cum accusantium odio quis officiis harum corporis in.',
            'facebook' => 'https://www.facebook.com/talmon.mwakesi.5',
            'youtube' => 'youtube.com',
            'user_id' => $user->id,
        ]);
    }
}
