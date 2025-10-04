<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Electronics', 'Fashion'];

        foreach ($categories as $category) {
            $cat = Category::firstOrCreate([
                'name' => $category
            ]);
            if (!$cat->exists) {
                $cat->save();
            }
        }
    }
}
