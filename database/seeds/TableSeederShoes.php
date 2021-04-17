<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Shoe;

class TableSeederShoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
        $shoes = New Shoe();
        $shoes->type = $faker->name();
        $shoes->save();
        };
    }
}
