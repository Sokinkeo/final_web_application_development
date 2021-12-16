<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'id' => 1,
                'name' => "Kapow Kai",
                'price' => 40,
                'picture' => "https://foodbuzz.site/api/v1/files/EDBF7EDB-5C1F-41CC-A7E4-930CA30D5F2D",
                'description' => "Chicken Fry with kapow very deliscious",
            ],
            [
                'id' => 2,
                'name' => "Kapow Kai",
                'price' => 40,
                'picture' => "https://foodbuzz.site/api/v1/files/EDBF7EDB-5C1F-41CC-A7E4-930CA30D5F2D",
                'description' => "Chicken Fry with kapow very deliscious",
            ],
            [
                'id' => 3,
                'name' => "Kapow Kai",
                'price' => 40,
                'picture' => "https://foodbuzz.site/api/v1/files/EDBF7EDB-5C1F-41CC-A7E4-930CA30D5F2D",
                'description' => "Chicken Fry with kapow very deliscious",
            ],
            [
                'id' => 4,
                'name' => "Kapow Kai",
                'price' => 40,
                'picture' => "https://foodbuzz.site/api/v1/files/EDBF7EDB-5C1F-41CC-A7E4-930CA30D5F2D",
                'description' => "Chicken Fry with kapow very deliscious",
            ],
        ];

        Task::insert($tasks);
    }
}
