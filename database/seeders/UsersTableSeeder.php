<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\client;
use HasFactory;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    use LaratrustUserTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=client::create([

            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => 12345,
            'type' => 1,
        ]);

        $user->attachRole('reciever');
        
       
    }
}
