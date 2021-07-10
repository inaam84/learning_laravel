<?php

namespace Database\Seeders;

use App\Models\Country;
use Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('cities')->truncate();

        $countries = Country::all();

        $faker = Faker\Factory::create();

        foreach($countries AS $country)
        {
            $counter = rand(2, 10);
            for($i = 1; $i <= $counter; $i++)
            {
                DB::table('cities')->insert([
                    'country_id' => $country->id,
                    'name' => $faker->city,
                ]);
            }
        }

        DB::statement('UPDATE cities SET created_at = NULL, updated_at = NULL');
    }
}
