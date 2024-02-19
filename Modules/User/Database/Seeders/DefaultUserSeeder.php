<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => fake()->name,
            'phone' => '09369301840',
            'password' => Hash::make('Ab@12345678')
        ]);
    }
}
