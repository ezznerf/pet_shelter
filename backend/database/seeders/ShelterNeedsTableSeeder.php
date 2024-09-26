<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShelterNeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/shelter_needs.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('shelter_needs')->insert([
                    'need_id' => $data[0],
                    'count' => $data[1],
                    'brand' => $data[2],
                ]);
            }

            fclose($handle);
        }
    }
}
