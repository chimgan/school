<?php
echo "<h1>";
//sudo apt-get install curl git
//curl -sS https://getcomposer.org/installer | php
//sudo mv composer.phar /usr/local/bin/composer
//composer global require "laravel/installer"
//composer create-project --prefer-dist laravel/laravel myTestProject
//#.bashrc
//export PATH="$HOME/.config/composer/vendor/bin:$PATH"
//source .bashrc

echo "<h1>";

echo "</h1>";

?>

composer require laracasts/generators --dev
if ($this->app->environment() == 'local') {
    $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
}
"require-dev": {
"laracasts/testdummy": "~2.0"
}

php artisan make:migration:schema create_shops_table --schema="title:string, address:string, email:string:unique"
php artisan make:migration:schema create_products_table --schema="name:string, code:integer"
php artisan make:migration:pivot shops products

php artisan make:seed shops
php artisan make:seed products

php artisan make:model Shop
php artisan make:model Product

factory(App\Product::class, 50)->create();
factory(App\Shop::class, 50)->create();

$factory->define(App\Shop::class, function (Faker\Generator $faker) {
return [
'title' => $faker->unique()->name,
'address' => $faker->unique()->address,
'email' => $faker->unique()->email,
];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
return [
'name' => $faker->unique()->name,
'code' => $faker->randomNumber(),
];
});


php artisan db:seed

php artisan make:controller ShopController --model=Shop

Route::get('shops', 'ShopController@index');
Route::get('shopitems/{id}', 'ShopController@shopitems');
Route::get('items', 'ShopController@items');