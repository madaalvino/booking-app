<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::create([
            'name' => 'Ruang Rapat A',
            'description' => 'Ruang rapat lantai 1',
            'capacity' => 10
        ]);

        Room::create([
            'name' => 'Ruang Rapat B',
            'description' => 'Ruang rapat lantai 2',
            'capacity' => 20
        ]);

        Room::create([
            'name' => 'Ruang Serbaguna',
            'description' => 'Ruang serbaguna untuk acara',
            'capacity' => 50
        ]);
    }
}

