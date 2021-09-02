<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
{

    protected $model = Product::class;


    public function definition()
    {
        $productSuffixes = ['Sweater', 'Pants', 'Shirt', 'Glasses', ];
        $name = $this->faker->company . ' ' . Arr::random($productSuffixes);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(320),
            'price' => $this->faker->numberBetween(10000,100000), // $100.00 - $1000.00
        ];
    }
}
