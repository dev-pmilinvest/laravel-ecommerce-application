<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);

        Category::create([
            'name'          =>  'argel7',
            'description'   =>  'This is the argel7 category, don\'t delete this one',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        factory('App\Models\Category', 10)->create();
    }
}
