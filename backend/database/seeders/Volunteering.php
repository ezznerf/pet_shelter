<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Volunteering extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/volunteering.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('volunteering')->insert([
                    'type_help_id' => $data[0],
                    'shelter_id' => $data[1],
                    'type_of_car' => $data[2],
                    'distance' => $data[3],
                    'duration_of_walk' => $data[4],
                ]);
            }

            fclose($handle);
        }
    }
}
