<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = "Tech";
        $category->save();

        $category1 = new \App\Category();
        $category1->name = "Sport";
        $category1->save();

        $category2 = new \App\Category();
        $category2->name = "Food";
        $category2->save();
    }
}
