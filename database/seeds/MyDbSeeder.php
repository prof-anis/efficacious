<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MyDbSeeder extends Seeder
{

	protected $count=[

		"user"=>10,
		"product"=>10,
		"category"=>10,
		"seller"=>20,



	];
    /**
     * Run the database seeds.
     *
     * @return void

     */
    public function run()
    {
        //
         $this->category();
          $this->ordinaryUser();
        $this->userSellers();
       
       
      
    }

    protected function userSellers()
    {

    	$users=factory(App\User::class,$this->count['user'])->create(['role'=>'seller'])->each(function($user){

    		//create a seller profile for some 
    		$profile=factory(App\Seller::class)->make(['user_id'=>$user->id]);
    		$user->seller()->save($profile);

    		//creates some products for this user
    		$product=factory(App\Product::class,$this->count['product'])->create(
    			['user_id'=>$user->id,
    			'category_id'=>rand(1,$this->count['category'])
    			]
    		)->each(function($product){
                //create reviews for each product
                $reviews=factory(App\Review::class,10)->create(['product_id'=>$product->id,'user_id'=>rand(1,$this->count['user'])]);
                //create faq for each product
                $faq=factory(App\Faq::class,10)->create(['product_id'=>$product->id]);
            });


    	});

    }

    protected function category()
    {
    	factory(App\Category::class,$this->count['category'])->create();
    }

    protected function ordinaryUser()
    {
    	factory(App\User::class,$this->count['user'])->create(['role'=>'normal']);
    }

   
}
