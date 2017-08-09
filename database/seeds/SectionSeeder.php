<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new \App\Section([
            'page_id' => 1,
            'order' => 1
        ]))->save();
    }
}
