<?php

namespace Database\Seeders;

use App\Models\City;
use Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('shops')->truncate();

        $cities = City::all();

        $faker = Faker\Factory::create();

        foreach($cities AS $city)
        {
            $counter = rand(2, 10);
            for($i = 1; $i <= $counter; $i++)
            {
                DB::table('shops')->insert([
                    'city_id' => $city->id,
                    'name' => $faker->company,
                ]);
            }
        }

        DB::statement('UPDATE shops SET created_at = NULL, updated_at = NULL');
    }
}
