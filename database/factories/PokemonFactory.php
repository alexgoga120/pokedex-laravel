<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->text(10),
            'name' => $this->faker->text(10),
            'types' => $this->faker->text(10),
            'weight' => $this->faker->text(10),
            'height' => $this->faker->text(10),
            'front' => $this->faker->text(10),
            'back' => $this->faker->text(10),
            'shiny_front' => $this->faker->text(10),
            'shiny_back' => $this->faker->text(10)
        ];
    }
}
