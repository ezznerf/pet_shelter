<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrgentHelpPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/urgent_photo.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('urgent_photos')->insert([
                    'urgent_help_id' => $data[0],
                    'path' => $data[1],
                    'name' => $data[2],
                    'size' => $data[3]
                ]);
            }

            fclose($handle);
        }
    }
}
