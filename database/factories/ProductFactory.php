<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_produk' => $this->faker->word, // Menghasilkan nama produk palsu
            'harga' => $this->faker->randomFloat(2, 1000, 1000000), // Menghasilkan harga produk palsu antara 1000 dan 1000000
        ];
    }
}
