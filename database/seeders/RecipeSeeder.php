<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Redis;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
             [
            'name' => 'Crispy Baked Buffalo Tofu Wings', 
           'description' => 'Chiken wings ,Tofu,Buffalo sauce',
           'price' => 8.50, 
           'category_id' => 16, 
           'image' => '/uploads/appertizer3.jpg'
          ],
          [
            'name' => 'Toasty bun Meat Sandwish', 
           'description' => 'Meat , Garlic , Sweet onion, Mayonnaise',
           'price' => 10.50, 
           'category_id' => 21, 
           'image' => '/uploads/sandwish2.jpg'
          ],
          [
            'name' => 'crispy chicken fettuccine alfredo', 
           'description' => 'Chicken breasts, Garlic, Eggs, Fettuccine, Italian seasoning, Butter, Heavy cream, Parmesan',
           'price' => 14.50, 
           'category_id' => 17, 
           'image' => '/uploads/maincours5.jpg'
          ],
          [
            'name' => 'chicken shawarma', 
           'description' => 'Chicken thigh, fillets, Garlic, Lettuce, Red onion, Tomatoes, Mayonnaise, Sriracha sauce, Pita bread, Yogurt',
           'price' => 15.50, 
           'category_id' => 21, 
           'image' => '/uploads/sandwish3.jpg'
          ],
          [
            'name' => 'pasta salad', 
           'description' => 'Salami, Basil, Garlic, Parsley, Dijon mustard,  Italian seasoning, Mozzarella',
           'price' => 13.99, 
           'category_id' => 19, 
           'image' => '/uploads/salad2.jpg'
          ],
          [
            'name' => 'Feta Greek salad', 
           'description' => 'Avocado, Cherry tomatoes, cucumber, Oregano, Red onion, Kalamata olives, Lemon juice',
           'price' => 13.00, 
           'category_id' => 19, 
           'image' => '/uploads/salad3.jpg'
          ],
          [
            'name' => 'Nutella banana crepes ', 
           'description' => 'Bananas, Eggs, Flour, Nutella and powdered sugar, Sugar, Vanilla ,Milk',
           'price' => 9.00, 
           'category_id' => 18, 
           'image' => '/uploads/dessert2.jpg'
          ],
          [
            'name' => ' Ricotta kunafa rolls ', 
           'description' => 'Lemon juice, Granulated sugar, Pistachios, ricotta cheese, FRESH kunafa ',
           'price' => 12.00, 
           'category_id' => 18, 
           'image' => '/uploads/dessert3.jpg'
          ],
          [
            'name' => 'Caramel Blondie Coffee ', 
           'description' => 'Coffee, Milk, Caramel, sugar ',
           'price' => 6.50, 
           'category_id' => 20, 
           'image' => '/uploads/drink2.jpg'
          ],
          [
            'name' => 'Pistachio Banana Smoothie ', 
           'description' => 'Milk, Banana, sugar,Pistachio',
           'price' => 8.00, 
           'category_id' => 20, 
           'image' => '/uploads/drink3.jpg'
          ],

           [ 
            'name' => 'Cheesy Noodles with Shrimps', 
           'description' =>'Rice Noodles ,mozzarella and Parmesan Cheese , Shrimps ,seasoning',
           'price' => 12.50,
           'category_id' => 17,
           'image' => '/uploads/maincours1.jpg'],
           [ 
            'name' => 'Garlic pasta with basil and tomato', 
           'description' => 'Pasta , Garlic , Basil , Tomato ,Olive Oil ,Feta cheese',
           'price' => 11.50, 
           'category_id' => 17, 
           'image' => '/uploads/maincours2.jpg'],
           [
            'name' => 'Chocolate Raspberry Cheesecake', 
           'description' => 'Chocolate , Raspberry , Cream Cheese' ,
           'price' => 9.99, 
           'category_id' => 18, 
           'image' => '/uploads/dessert1.jpg'
           ],
           [
            'name' => 'Pesto Chiken Caesar Salad', 
           'description' => 'Chiken , Pesto , Tomato , Burrata , Feta Cheese' ,
           'price' => 10.99, 
           'category_id' => 19, 
           'image' => '/uploads/salad1.jpg'
           ],
           [
            'name' => 'Strawberry Basil Lemonade', 
           'description' => 'Strawberry , Basil , Lemonade',
           'price' => 5.99, 
           'category_id' => 20, 
           'image' => '/uploads/drink1.jpg'
           ],
           [
            'name' => 'Buttermilk fried chicken sandwich', 
           'description' => 'chicken ,spicy mayo ,Buttermilk ,soft white Bread',
           'price' => 7.99, 
           'category_id' => 21, 
           'image' => '/uploads/sandwish1.jpg'
           ]

        ];



        foreach ($recipes as $recipe){
            Recipe::create($recipe);
        }



    }
}
