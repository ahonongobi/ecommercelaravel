<?php

use Illuminate\Database\Seeder;
use App\ Category;
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
            'name'=>'High tech',
            'slug'=>'high-tech'

        ]);
        Category::create([
            'name'=>'Lives tech',
            'slug'=>'Livres'

        ]);
        Category::create([
            'name'=>'Jeux',
            'slug'=>'Jeux'

        ]);
        Category::create([
            'name'=>'Nourriture',
            'slug'=>'Nourriture'

        ]);
    }
}
