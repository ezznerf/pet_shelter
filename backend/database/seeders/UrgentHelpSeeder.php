<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrgentHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/urgent_help.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('urgent_help')->insert([
                    'shelter_id' => $data[0],
                    'name' => $data[1],
                    'description' => $data[2],
                    'phone_number' => $data[3],
                    'status' => $data[4],
                ]);
            }

            fclose($handle);
        }
    }
}
