<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FillNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i <= 40; $i++) {
            DB::table('notes')->insert([
                'title' => 'Mi note ' . $i,
                'description' => 'Description of the note nº ' . $i
            ]);
        }

        // Method from seeder.
        $this->command->info("Notes table filled properly");
    }
}
