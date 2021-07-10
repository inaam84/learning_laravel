<?php

namespace Database\Seeders;

use App\Models\Shop;
use Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('employees')->truncate();

        $shops = Shop::all();

        $faker = Faker\Factory::create();

        foreach($shops AS $shop)
        {
            $counter = rand(2, 5);
            for($i = 1; $i <= $counter; $i++)
            {
                DB::table('employees')->insert([
                    'shop_id' => $shop->id,
                    'name' => $faker->name,
                ]);
            }
        }

        DB::statement('UPDATE employees SET created_at = NULL, updated_at = NULL');
    }
}
