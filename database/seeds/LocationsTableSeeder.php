<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Location::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Al Moroj',
        'description' => 'Al Ain',
        'number_of_workers' => 58,
        'number_of_animals' => 400,
        'owner' => 'Saeed Salim',
    ]);

    Location::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Al Maraee',
        'description' => 'Al Ain',
        'number_of_workers' => 34,
        'number_of_animals' => 250,
        'owner' => 'Saeed Salim',
    ]);

    Location::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Al Safa',
        'description' => 'Al Fujaira',
        'number_of_workers' => 88,
        'number_of_animals' => 350,
        'owner' => 'Saeed Salim',
    ]);
    }
}
