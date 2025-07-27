<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Categories and their respective subcategories
        $categories = [
            'Electronics' => ['Mobile', 'Laptop', 'Computer'],
            'Fashion' => ['Men', 'Women', 'Children'],
        ];

        foreach ($categories as $categoryName => $subCategories) {
            // Create or find the category
            $category = Category::firstOrCreate(['name' => $categoryName]);


            foreach ($subCategories as $subCategoryName) {
                // Create the subcategory linked to the category
                $subCategory = SubCategory::firstOrCreate([
                    'name' => $subCategoryName,
                    'category_id' => $category->id,
                ]);
            }

            if (!$subCategory->exists) {
                $subCategory->save();
            }
        }
    }
}
