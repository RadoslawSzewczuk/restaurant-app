<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')
            ->insert( $this->getPredefinedCategories() );
    }

    private function getPredefinedCategories(): array
    {
        return [
            [
                'id'            => 1,
                'name'          => 'Promocje',
                'slug'          => 'promocje',
                'image'         => 'special.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 2,
                'name'          => 'Popularne',
                'slug'          => 'popularne',
                'image'         => 'popular.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 3,
                'name'          => 'Danie dnia',
                'slug'          => 'danie_dnia',
                'image'         => 'dish_of_the_day.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 4,
                'name'          => 'Makarony',
                'slug'          => 'makarony',
                'image'         => '',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 5,
                'name'          => 'Pizze',
                'slug'          => 'pizze',
                'image'         => 'pizza.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 6,
                'name'          => 'Burgery',
                'slug'          => 'burgery',
                'image'         => 'burger.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 7,
                'name'          => 'Sushi',
                'slug'          => 'sushi',
                'image'         => 'sushi.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 8,
                'name'          => 'Naleśniki',
                'slug'          => 'nalesniki',
                'image'         => 'pancake.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 9,
                'name'          => 'Zupy',
                'slug'          => 'zupy',
                'image'         => 'soup.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],

            [
                'id'            => 16,
                'name'          => 'Sałatki',
                'slug'          => 'salatki',
                'image'         => 'salad.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 17,
                'name'          => 'Lunch',
                'slug'          => 'lunch',
                'image'         => 'lunch.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 18,
                'name'          => 'Przystawki',
                'slug'          => 'przystawki',
                'image'         => 'appetizer.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 19,
                'name'          => 'Desery',
                'slug'          => 'desery',
                'image'         => 'dessert.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 20,
                'name'          => 'Napoje',
                'slug'          => 'napoje',
                'image'         => 'beverage.jpg',
                'parent_id'     => null,
                'is_published'  => 1
            ],
            [
                'id'            => 21,
                'name'          => 'Napoje bezalkoholowe',
                'slug'          => 'napoje_bezalkoholowe',
                'image'         => 'beverage_nonalcohol.jpg',
                'parent_id'     => 20,
                'is_published'  => 1
            ],
            [
                'id'            => 22,
                'name'          => 'Napoje alkoholowe',
                'slug'          => 'napoje_alkoholowe',
                'image'         => 'beverage_alcohol.jpg',
                'parent_id'     => 20,
                'is_published'  => 1
            ],
        ];
    }
}
