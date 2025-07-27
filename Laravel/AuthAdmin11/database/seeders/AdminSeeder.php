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
        $user = User::where('email', 'master@admin.com')->first();
        if (!$user) {
            $user = new User();
        }
        $user->name = 'Admin';
        $user->email = 'master@admin.com';
        $user->password = Hash::make('admin');
        $user->role = '0';
        $user->status = 'active';
        $user->save();
    }
}
