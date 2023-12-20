<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::insert([
            ['code' => 'JNE', 'title' => 'Jalur Nugraha Ekakuriesjfies (JNE)'],
            ['code' => 'POS', 'title' => 'POS INDONESIA'],
            ['code' => 'TIKI', 'title' => 'Citra Van akldkawdl'],
        ]);
    }
}
