<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= [
            [
                'id'=>1,'parent_id'=>0,'section_id'=>1,'name'=>'T-shirts','image'=>'','discount'=>1,'description'=>'','url'=>'t-shirts','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
                [
                    'id'=>2,'parent_id'=>0,'section_id'=>2,'name'=>'Casuals','image'=>'','discount'=>1,'description'=>'','url'=>'casuals','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
                    [
                        'id'=>3,'parent_id'=>0,'section_id'=>1,'name'=>'Polo','image'=>'','discount'=>1,'description'=>'','url'=>'polo','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ];

            Category::insert($category);
            
    }
}
