<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'about category',
            'slug' => 'about-category',
            'summary'  => 'category functionality',
        ]);
        DB::table('categories')->insert([
            'title' => 'Home Appliances',
            'slug' => 'about-home ',
            'summary'  => 'air coller',
        ]);
        DB::table('categories')->insert([
            'title' => 'electronics',
            'slug' => 'about-wave ',
            'summary'  => 'microwave',
        ]);
        DB::table('categories')->insert([
            'title' => 'Motor bikes',
            'slug' => 'about-bikes ',
            'summary'  => 'rider',
        ]);
        DB::table('categories')->insert([
            'title' => 'furniture',
            'slug' => 'about-furniture',
            'summary'  => 'sofa set',
        ]);
    }
}
