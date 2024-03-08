<?php

namespace Database\Seeders;

use App\Models\database;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        database::create([

            'id' => '1',
            'name' => 'chaman',
            'age'=>'19',
            'Email'=>'Chaman@gmail.com',

       ]);
    }
}
