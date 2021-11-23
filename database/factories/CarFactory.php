<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * Define the model's default state.
         *
         * @return array
         */

            return [
                'brand' => $this->faker->word,
                'model' => $this->faker->word,
                'engine' => $this->faker->word,
                'max_speed' => $this->faker->numberBetween(120, 300),
                'year' => $this->faker->numberBetween(1990, 2021),
                'number_of_doors' =>  $this->faker->numberBetween(2, 10),
                'is_automatic' =>  $this->faker->numberBetween(0, 1),
            ];
    }
}