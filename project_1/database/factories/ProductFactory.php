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
            'name' => $this->faker->city,
            'description' => $this->faker->text(150),
            'price' => $this->faker->randomFloat(2, 100, 500),
            'quantity' => $this->faker->numberBetween(5, 100),
            'product_category_id' => '999',
            'image' => 'other_',
        ];
    }
}