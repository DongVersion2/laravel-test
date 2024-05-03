<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    DB::table('table_name')->insert([
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
