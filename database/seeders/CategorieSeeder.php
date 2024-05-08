<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define categories
        $categories = [
            ['name' => 'Appetizers', 'description' => 'A small dish of food or a drink taken before a meal to stimulate one\'s appetite.'],
            ['name' => 'Main Courses', 'description' => 'The primary dish in a meal consisting of several courses, typically containing meat, fish, or a vegetarian alternative.'],
            ['name' => 'Desserts', 'description' => 'A sweet course typically eaten at the end of a meal.'],
            ['name' => 'Salads', 'description' => 'A dish consisting of a mixture of small pieces of food, typically vegetables, served cold with a dressing.'],
            ['name' => 'Drinks', 'description' => 'Refreshing drinks crafted with the finest ingredients, offering a burst of flavor in every sip.'],
            ['name' => 'Sandwiches', 'description' => 'A food item consisting of two or more slices of bread with one or more fillings between them.'],
        ];

        // Create categories
        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
}
