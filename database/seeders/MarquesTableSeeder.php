<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('JSON/marques.json');

        if (!file_exists($path)) {
            echo "File marques.json not found in public directory.";
            return;
        }

        $json = file_get_contents($path);
        $data = json_decode($json);

        if (!$data) {
            echo "Invalid JSON format in marques.json.";
            return;
        }

        foreach ($data as $marque) {
            DB::table('marques')->insert([
                'id'=>$marque->id,
                'name' => $marque->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        echo "Marques table seeded successfully.";
    }
}
