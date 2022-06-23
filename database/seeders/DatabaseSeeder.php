<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(5)->create();

        // Listing::create([
        //     'title' => 'First Listing',
        //     'tags' => 'first, listing, tag',
        //     'company' => 'First Company',
        //     'location' => 'First Location',
        //     'email' => 'anemail@gmail.com',
        //     'website' => 'http://first.com',
        //     'description' => 'First Description',
        // ]);

        // Listing::create([
        //     'title' => 'second Listing',
        //     'tags' => 'second, listing, tag',
        //     'company' => 'second Company',
        //     'location' => 'second Location',
        //     'email' => 'anemail@gmail.com',
        //     'website' => 'http://second.com',
        //     'description' => 'second Description',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
