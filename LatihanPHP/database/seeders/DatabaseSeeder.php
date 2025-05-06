<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Dotenv\Parser\Value;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Email;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Alfin',
            'email' => 'alfinnn831@gmail.com',
            'password' => Hash::make(value: 'password')
        ]);

        DB::table('users')
            ->where(column: 'id', operator: 1)
            ->update(values: [
                'password' => Hash::make('123456')
            ]);
    }
}
