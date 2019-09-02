<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Cvetlični med', 'slug' => 'cvetlicni', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Akacijev med', 'slug' => 'akacijev', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kostanjev med', 'slug' => 'kostanjev', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gozdni med', 'slug' => 'gozdni', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hojev med', 'slug' => 'hojev', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Darilni kompleti', 'slug' => 'darilni-kompleti', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
