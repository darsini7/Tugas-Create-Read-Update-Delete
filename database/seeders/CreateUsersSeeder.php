<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'elisofttech@gmail.com',
                'level'=>'admin',
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
                'level'=>'user',
               'password'=> Hash::make('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
