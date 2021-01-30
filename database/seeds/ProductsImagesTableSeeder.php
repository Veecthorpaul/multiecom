<?php

use Illuminate\Database\Seeder;
use App\ProductsImage;

class ProductsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsImages = [
            [
                'id'=>1,'product_id'=>4,'image'=>'boltz.png','status'=>1],
        ];

        ProductsImage::insert($productsImages);
    }
}
