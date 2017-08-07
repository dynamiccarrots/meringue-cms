<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(PageSeeder::class);
         $this->call(SectionSeeder::class);
         $this->call(BlockSeeder::class);
         $this->call(PluginSeeder::class);
    }
}
