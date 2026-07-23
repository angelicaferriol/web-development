<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \Illuminate\Support\Facades\DB::table('user_type')->insert([
            ['id' => 1, 'name' => 'admin', 'display_name' => 'Admin'],
            ['id' => 2, 'name' => 'manager', 'display_name' => 'Manager'],
            ['id' => 3, 'name' => 'regular', 'display_name' => 'Regular User'],
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
