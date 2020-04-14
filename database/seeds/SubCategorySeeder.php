<?php

use Illuminate\Database\Seeder;
use App\Admin\SubCategory;
use App\Admin\Category;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deafultSubCategories = [
            [
                'name' => "Shirt",
                'slug' => 'srt',
                'category_id' => $this->getRandomCategoryId()
            ],
            [
                'name' => "Pant",
                'slug' => 'pnt',
                'category_id' => Category::where('slug', 'men')->value('id')
            ],
            [
                'name' => "Jacket",
                'slug' => 'jkt',
                'category_id' => $this->getRandomCategoryId()
            ],
            [
                'name' => "Swetter",
                'slug' => 'swt',
                'category_id' => $this->getRandomCategoryId()
            ],
            [
                'name' => "Glass",
                'slug' => 'gls',
                'category_id' => Category::where('slug', 'women')->value('id')
            ],
            [
                'name' => "Watch",
                'slug' => 'wtc',
                'category_id' => $this->getRandomCategoryId()
            ],
            [
                'name' => "T-Shirt",
                'slug' => 'tsrt',
                'category_id' => Category::where('slug', 'kid')->value('id')
            ],
            [
                'name' => "Sports",
                'slug' => 'spt',
                'category_id' => $this->getRandomCategoryId()
            ],
        ];

        foreach ($deafultSubCategories as $key => $subCategory) {
            SubCategory::create($subCategory);
        }
    }

    private function getRandomCategoryId() {
        $category = \App\Admin\Category::inRandomOrder()->first();
        return $category->id;
    }

}
