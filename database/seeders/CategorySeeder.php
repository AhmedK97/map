<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        Category::create([
           'name' => "فنادق",
            'slug' => "فنادق",
        ]);

        Category::create([
            'name' => "مطاعم",
             'slug' => "مطاعم",
         ]);

         Category::create([
            'name' => "تسوق",
             'slug' => "تسوق",
         ]);

         Category::create([
            'name' => "مدارس وجامعات",
             'slug' => "مدارس-جامعات",
         ]);

         Category::create([
            'name' => "مستشفيات",
             'slug' => "مستشفيات",
         ]);

         Category::create([
            'name' => "صيدليات",
             'slug' => "صيدليات",
         ]);    }
}
