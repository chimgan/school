https://github.com/laracasts/Laravel-5-Generators-Extended

use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}

composer require laracasts/generators --dev

"laracasts/generators": "dev-master as 1.1.4",
"laracasts/testdummy": "~2.0",

php artisan migrate:status
php artisan migrate

php artisan make:migration:schema create_developers_table --schema="firstname:string, secondname:string:nullable, email:string:unique, phone:string:unique, skype:string:unique, address:string:nullable"
php artisan make:migration:schema create_projects_table --schema="title:string, description:string:nullable"
php artisan make:migration:schema create_technologies_table --schema="title:string"
php artisan make:migration:pivot developers projects
php artisan make:migration:pivot projects technologies
php artisan make:migration:pivot developers technologies

php artisan make:seed UsersTableSeeder
php artisan make:seed DevelopersTableSeeder
php artisan make:seed ProjectsTableSeeder
php artisan make:seed TechnologiesTableSeeder

php artisan make:model Developers
php artisan make:model Projects
php artisan make:model Technologies

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