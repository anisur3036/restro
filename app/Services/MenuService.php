<?php

namespace App\Services;

use App\Models\Category;

class MenuService
{
    public function getMenuWithCategory(array $restroIds)
    {
        $categories = Category::whereIn('restro_id', $restroIds)
            ->get()
            ->groupBy('category.name');
        
            return $categories;
    }
}