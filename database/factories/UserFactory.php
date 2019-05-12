<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name'=> 'cooker',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'role'=>'normal',
        'image_url'=>"http://efficacious.test/anis.jpg"

    ];
});



$factory->define(App\Product::class, function (Faker $faker) {
    $type=['goods','services'];
    return [
        'name'=>$faker->bs,
        'description'=>$faker->paragraph(1),
        'amount'=>rand(1000,400000),
         "type"=>$type[rand(0,1)],
         'image_url'=>"http://efficacious.test/default.jpg",
         'thumbnails'=>["http://efficacious.test/default.jpg","http://efficacious.test/house.jpg","http://efficacious.test/note.jpg","http://efficacious.test/microscope.jpg"],
         'long_description'=>$faker->paragraph(3)

    ];
});


$factory->define(App\Seller::class, function (Faker $faker) {
   
    return [
      'address'=>$faker->address,
      'phone'=>rand(1000,9000),
      'sex'=>"male",
      'business_name'=>$faker->name." And Brothers Limited",
      'description'=>$faker->paragraph(3)

    ];
});


$factory->define(App\Category::class, function (Faker $faker) {
    $type=['goods','services'];
    return [
       "name"=>$faker->bs,
       "description"=>$faker->paragraph(1),
       "type"=>$type[rand(0,1)]

    ];
});


$factory->define(App\Review::class, function (Faker $faker) {
    $type=['goods','services'];
    return [
       "review"=>$faker->paragraph(2),
       "user_id"=>1,
       "product_id"=>1

    ];
});

$factory->define(App\Faq::class, function (Faker $faker) {
    $type=['goods','services'];
    return [
       "title"=>$faker->text(5),
       "body"=>$faker->paragraph(2),
       "product_id"=>1

    ];
});






