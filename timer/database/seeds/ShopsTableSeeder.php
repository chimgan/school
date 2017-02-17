<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
//        TestDummy::times(20)->create('App\Shop');
        factory(App\Shop::class, 50)->create();
    }
}
