<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersSeeder');
    }
}


class UsersSeeder extends Seeder{

    public function run(){

        DB::table('Users')->delete();

        User::create([
            'login' => 'n.pavets',
            'password' => '6136132',
            'first_name' => 'Никита',
            'second_name' => 'Павец',
            'rang' => 'admin'
        ]);

        User::create([
            'login' => 'a.karimova',
            'password' => '7155929',
            'first_name' => 'Алёна',
            'second_name' => 'Каримова',
            'rang' => 'admin'
        ]);

        User::create([
            'login' => 'd.karimov',
            'password' => '7175804',
            'first_name' => 'Дмитрий',
            'second_name' => 'Каримов',
            'rang' => 'admin'
        ]);
    }
}