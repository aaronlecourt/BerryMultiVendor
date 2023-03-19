<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'category_id'=>'1',
                'user_id'=>'1',
                'product_name'=>'Carrot',
                'product_price'=>'50',
                'category'=>'veggie',
                'description'=>'Its a carrot',
                'gallery'=>'https://media.istockphoto.com/id/545454816/photo/fresh-carrots-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=Ildkp76TfQOntsgiIMDu2cAsBt2ebHx2870MHy-4zBs=',
            ],
            [
                'category_id'=>'2',
                'user_id'=>'2',
                'product_name'=>'Apple',
                'product_price'=>'20',
                'category'=>'fruit',
                'description'=>'Its an apple',
                'gallery'=>'https://media.istockphoto.com/id/495878092/photo/red-apple.jpg?s=612x612&w=0&k=20&c=M2ndFI1v2erJM18q1Cd1QCM8jqBlRKLc1nLE9BNp-EY=',
            ],
            [
                'category_id'=>'2',
                'user_id'=>'1',
                'product_name'=>'Grapes',
                'product_price'=>'100',
                'category'=>'fruit',
                'description'=>'Its a grape',
                'gallery'=>'https://thumbs.dreamstime.com/b/fresh-black-grapes-isolated-white-background-clipping-path-144171973.jpg',
            ]         
        ]);
    }
}
