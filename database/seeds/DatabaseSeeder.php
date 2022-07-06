<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
          $this->call(UsersTableSeeder::class);
          $this->call(SettingTableSeeder::class);
          $this->call(CouponSeeder::class);
          $this->call(CategorySeeder::class);
          $this->call(BrandSeeder::class);
          $this->call(BannerSeeder::class);
          $this->call( ProductSeeder::class);
    }
}
