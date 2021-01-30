<?php

use Illuminate\Database\Seeder;
use App\ProductsAttribute;

class ProductsAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productAttributes = [
            ['id'=>1,'product_id'=>1,'price'=>2000,'stock'=>20,'status'=>1],

            ['id'=>2,'product_id'=>1,'price'=>3000,'stock'=>30,'status'=>1],

            ['id'=>3,'product_id'=>1,'price'=>4000,'stock'=>30,'status'=>1],
        ];

                  ProductsAttribute::insert($productAttributes);
    }
}
