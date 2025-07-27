<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category_id', 'sub_category_id', 'price', 'discount_price', 'description', 'image'];

    public function categories()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }

    public function subcategories()
    {
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
}
