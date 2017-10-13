<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'imagePath'=>'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title'=>'Harry Potter',
            'description'=>'Super cool  - at least as a child',
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'http://i.ebayimg.com/00/s/NTAwWDM1OA==/z/cHgAAOxycmBS-sdI/$_35.JPG?set_id=2',
            'title'=>'Tintin - Destination Moon',
            'description'=>'The great adventures of Tintin',
            'price'=>5.35
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/61ZxkECDrnL._SX331_BO1,204,203,200_.jpg',
            'title'=>'Dragon Ball',
            'description'=>'Son Goku fighting for the crystal balls',
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://images.gr-assets.com/books/1320524015l/141019.jpg',
            'title'=>'Snow White',
            'description'=>'Snow White and the seven dwarfs',
            'price'=>6.47
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'http://d.gr-assets.com/books/1328106999l/5784403.jpg',
            'title'=>'The Beauty and the Beast',
            'description'=>'The Kingdom of the Beauty',
            'price'=>9.50
        ]);
        $product->save();
    }
}
