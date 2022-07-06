<?php

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'about products',
            'slug' => 'about-products',
            'description' => 'available here',
            'summary'  => 'products functionality',
            'photo' => 'https://www.istockphoto.com/photo/beautiful-kid-boy-in-cap-looking-at-the-camera-blowing-a-kiss-with-hand-on-air-being-gm1221611861-358159345',
            'price' => '858',
            'discount' => '8',
            'is_featured' => '1',
        ]);
        DB::table('products')->insert([
            'title' => 'air coler',
            'slug' => 'about-coller',
            'description' => 'available',
            'summary'  => 'air coler functionality',
            'photo' => 'https://www.istockphoto.com/photo/young-muslim-woman-taking-picture-of-cherry-blossoms-gm1214145432-353129996',
            'price' => '3000',
            'discount' => '8',
            'is_featured' => '1',
        ]);
        DB::table('products')->insert([
            'title' => 'bike',
            'slug' => 'about-bike',
            'description' => 'yes available',
            'summary'  => 'bike functionality',
            'photo' => 'https://www.istockphoto.com/collaboration/boards/Dy4Psm7TDkmy_E-LFrobrQ',
            'price' => '89898',
            'discount' => '8',
            'is_featured' => '1',
        ]);
        DB::table('products')->insert([
            'title' => 'cycle',
            'slug' => 'about-cycle',
            'description' => 'not available',
            'summary'  => 'cycle functionality',
            'photo' => 'https://www.istockphoto.com/photo/girl-watering-the-vegetable-garden-gm981040124-266475825',
            'price' => '1236',
            'discount' => '8',
            'is_featured' => '1',
        ]);
    }
    }

