<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{

   


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 0; $i < 5; $i++) {
                Post::create(attributes: [
                    "title"=> $faker->sentence,
                    "content"=> $faker->paragraph(5),
                    "category_id"=> $category->id,
                ]);
            }
        }

    }
}
