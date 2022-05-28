<?php

namespace Database\Seeders;

use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TagFactory::times(100)->create();
    }
}
