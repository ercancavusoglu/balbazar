<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plays')->insert([
            'user_id' => 1,
            'meditation_id' => 1,
            'duration' => 1200,
            'created_at'=>new \DateTime()
        ]);

        DB::table('plays')->insert([
            'user_id' => 1,
            'meditation_id' => 2,
            'duration' => 1200,
            'created_at' => new \DateTime()
        ]);

        DB::table('plays')->insert([
            'user_id' => 1,
            'meditation_id' => 3,
            'duration' => 90,
            'created_at'=>new \DateTime()
        ]);

        DB::table('plays')->insert([
            'user_id' => 1,
            'meditation_id' => 4,
            'duration' => 60,
            'created_at'=>new \DateTime()
        ]);
    }
}
