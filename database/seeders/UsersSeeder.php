<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 0; $index < 10; $index++) {
			DB::table('users')->insert([
				'name' => 'default' . $index,
				'email'=> Str::random(10) . '@default.com',
				'city'=> 'bogota',
				'created_at'=> Carbon::now(),
				'updated_at'=> Carbon::now()
			]);
		}      
    }
}
