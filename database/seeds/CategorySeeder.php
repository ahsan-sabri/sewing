<?php

use Illuminate\Database\Seeder;
use App\Admin\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deafultCategories = [
            [
                'name' => "Men's Wear",
                'slug' => 'men'
            ],
            [
                'name' => "Women's Wear",
                'slug' => 'women'
            ],
            [
                'name' => "Kid's Zone",
                'slug' => 'kid'
            ]
        ];

        foreach ($deafultCategories as $key => $category) {
            Category::create($category);
        }

    }
}
