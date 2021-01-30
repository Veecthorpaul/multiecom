<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords = [
            [
                'id'=>1,'category_id'=>2,'section_id'=>1,'name'=>'Blue Jacket','price'=>5000,'description'=>'Latest Products','status'=>1,'code'=>'BT001','weight'=>10,'video'=>'','meta_title'=>'','meta_keywords'=>'','meta_description'=>'','image'=>'','is_featured'=>'No','discount'=>'10','brand_id'=>1
            ],

            [
                'id'=>2,'category_id'=>1,'section_id'=>2,'name'=>'Red Jacket','price'=>5000,'description'=>'Latest Products','status'=>1,'code'=>'BT002','weight'=>12,'video'=>'','meta_title'=>'','meta_keywords'=>'','meta_description'=>'','image'=>'','is_featured'=>'Yes','discount'=>'10','brand_id'=>2
            ],

            [
                'id'=>3,'category_id'=>2,'section_id'=>3,'name'=>'Black Jacket','price'=>5000,'description'=>'Latest Products','status'=>1,'code'=>'BT003','weight'=>13,'video'=>'','meta_title'=>'','meta_keywords'=>'','meta_description'=>'','image'=>'','is_featured'=>'No','discount'=>'10','brand_id'=>3
            ],
        ];

        Product::insert($productRecords);
    }
}
