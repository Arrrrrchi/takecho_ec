<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'admin_id' => 1,
                'filename' => 'なめこ1.jpg',
                'title' => 'なめこ1'
            ],
            [
                'admin_id' => 1,
                'filename' => 'なめこ2.jpg',
                'title' => 'なめこ2'
            ],
            [
                'admin_id' => 1,
                'filename' => 'なめこ3.jpg',
                'title' => 'なめこ3'
            ],
        ]);
    }
}
