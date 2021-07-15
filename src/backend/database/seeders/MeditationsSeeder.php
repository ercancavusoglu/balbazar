<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeditationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meditations')->insert([
            'name' => 'Yam',
            'description' => 'Yam Description',
            'producer' => 'Yam Producer',
            'duration' => 1200, // 20minutes
            'image' => NULL,
            'is_active' => true,
            'created_at' => new \DateTime()
        ]);

        DB::table('meditations')->insert([
            'name' => 'Yin',
            'description' => 'Yin Description',
            'producer' => 'Yin Producer',
            'duration' => 1200, // 20minutes
            'image' => NULL,
            'is_active' => true,
            'created_at' => new \DateTime()
        ]);

        DB::table('meditations')->insert([
            'name' => 'Full Moon',
            'description' => 'Full Moon Description',
            'producer' => 'Full Moon Producer',
            'duration' => 60, // 1minutes
            'image' => NULL,
            'is_active' => true,
            'created_at' => new \DateTime()
        ]);

        DB::table('meditations')->insert([
            'name' => 'New Moon',
            'description' => 'New Moon Description',
            'producer' => 'New Moon Producer',
            'duration' => 90, //1.5minutes
            'image' => NULL,
            'is_active' => true,
            'created_at' => new \DateTime()
        ]);
    }
}
