<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email','admin@gmail.com')->first();
        if(!$user){
            $user = new User();
        }
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin@123');
        $user->username = 'admin';
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();
    }
}
