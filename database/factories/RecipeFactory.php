<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => $this->faker->word,
                'description' => $this->faker->sentence,
                'price' => $this->faker->randomFloat(2, 1, 100),
                'category_id' => function () {
                    // You may modify this logic to assign category IDs as needed
                    return \App\Models\Categorie::inRandomOrder()->first()->id;
                },
                'image' => $this->faker->imageUrl(),
                'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now')
            
        ];
    }
}
