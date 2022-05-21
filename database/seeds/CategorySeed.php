<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; ++$i) {
            \Illuminate\Support\Facades\DB::table('category')
                ->insert([
                    'name' => 'name ' . $i,
                    'content' => 'content '. $i,
                    'parent_id' => 1
                ]);
        }
    }
}
