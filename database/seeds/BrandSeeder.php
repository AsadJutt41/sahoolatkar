<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'Brand',
            'slug' => 'about-Brand',
            'status'  => 'active',
        ]);
        DB::table('brands')->insert([
            'title' => 'Haier',
            'slug' => 'about-haier ',
            'status'  => 'active',
        ]);
        DB::table('brands')->insert([
            'title' => 'Dawlance',
            'slug' => 'about-dawlance ',
            'status'  => 'inactive',
        ]);
        DB::table('brands')->insert([
            'title' => 'Honda',
            'slug' => 'about-Honda ',
            'status'  => 'active',
        ]);
        DB::table('brands')->insert([
            'title' => 'Boss',
            'slug' => 'about-Boss',
            'status'  => 'inactive',
        ]);
    }
}
