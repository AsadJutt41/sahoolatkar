<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'title' => 'sahoolatkar',
            'slug' => 'about-sahoolatkar',
            'description' => 'available',
        ]);
        DB::table('banners')->insert([
            'title' => 'jshfiue',
            'slug' => 'about-jshfiue',
            'description' => 'is',
        ]);
        DB::table('banners')->insert([
            'title' => 'mdnfnjke',
            'slug' => 'about-mdnfnjke',
            'description' => 'not',
        ]);
        DB::table('banners')->insert([
            'title' => 'kjnvkd',
            'slug' => 'about-kjnvkd',
            'description' => 'yes',
        ]);
        DB::table('banners')->insert([
            'title' => 'djsnfj',
            'slug' => 'about-djsnfj',
            'description' => 'true',
        ]);
    }
}
