<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_name')->insert([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
