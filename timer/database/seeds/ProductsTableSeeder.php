<?php

use App\Product;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
//        TestDummy::times(20)->create('App\Product');
//        if (Product::count() == 0) {
//            Product::create([
//                'name'           => 'Admin',
//                'email'          => 'admin@admin.com',
//                'password'       => bcrypt('password'),
//                'remember_token' => str_random(60),
//                'role_id'        => $role->id,
//            ]);
//        }
        factory(App\Product::class, 50)->create();
    }
}
