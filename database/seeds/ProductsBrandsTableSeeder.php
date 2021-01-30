<?php

use Illuminate\Database\Seeder;
use App\ProductsBrand;

class ProductsBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsBrands = [
            ['id'=>1,'name'=>'Ashluxe','status'=>1],
            ['id'=>2,'name'=>'Adidas','status'=>1],
            ['id'=>3,'name'=>'Prada','status'=>1],
            ['id'=>4,'name'=>'Nike','status'=>1],
            ['id'=>5,'name'=>'Gucci','status'=>1],
        ];

        ProductsBrand::insert($productsBrands);
    }
}
