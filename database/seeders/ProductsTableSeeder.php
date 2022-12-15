<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'El fuego de la imaginacion',
            'slug' => 'fuego de la imaginacion',
            'details' => 'Libros, escenarios, pantallas y museos',
            'price' => 699.00,
            'shipping_cost' => 80.99,
            'description' => 'Libro el fuego de la imaginacion',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'libro1.jpeg'
        ]);

        Product::create([
            'name' => '50 años de historia',
            'slug' => 'historia',
            'details' => 'librerias Gandhi',
            'price' => 390,
            'shipping_cost' => 19.99,
            'description' => 'Libro de historia',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'libro2.png'
        ]);

        Product::create([
            'name' => 'Aveces despierto temblando',
            'slug' => 'miedo',
            'details' => 'Ximena Santaolalla',
            'price' => 319,
            'shipping_cost' => 28.99,
            'description' => 'Libro de terror',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'libro3.jpg'
        ]);

        Product::create([
            'name' => 'Surrender',
            'slug' => 'surrender',
            'details' => 'Bono',
            'price' => 599.00,
            'shipping_cost' => 69.00,
            'description' => 'Libro de surrender',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'libro4.jpg'
        ]);

        Product::create([
            'name' => 'Revolucion',
            'slug' => 'rev',
            'details' => 'Perez Reverte',
            'price' => 489.00,
            'shipping_cost' => 56.59,
            'description' => 'Libro de Revolucion',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'libro5.jpg'
        ]);

        Product::create([
            'name' => 'la vida, despues',
            'slug' => 'la vida, despues',
            'details' => 'Abdulrazak Gurnah',
            'price' => 349.50,
            'shipping_cost' => 22.50,
            'description' => 'Libro de la vida despues',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'libro6.jpg'
        ]);

        Product::create([
            'name' => 'El caso Alaska sanders',
            'slug' => 'el caso',
            'details' => 'Joel  Dicker',
            'price' => 469.00,
            'shipping_cost' => 56.79,
            'description' => 'libro de caso alaska',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'libro7.jpg'
        ]);

    }
}
