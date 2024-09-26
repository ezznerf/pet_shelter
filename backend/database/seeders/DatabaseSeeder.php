<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        $this->call(SheltersTableSeeder::class);
//        $this->call(PetsTableSeeder::class);
//        $this->call(PhotosTableSeeder::class);
        $this->call(NeedsTableSeeder::class);
        $this->call(ShelterNeedsTableSeeder::class);
    }
}

