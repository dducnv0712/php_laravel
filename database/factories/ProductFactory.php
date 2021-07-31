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
     * @throws \Exception
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "image"=>$this->faker->imageUrl(),
            "description" =>$this->faker->text(200),
            "brand_id"=>random_int(1,300),
            "price"=>random_int(0,5000),
            "qty"=>random_int(0,100),
            "category_id"=>random_int(1,300)
        ];
    }
}
