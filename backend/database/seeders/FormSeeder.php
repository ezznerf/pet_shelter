<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/form.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('forms')->insert([
                    'shelter_id' => $data[0],
                    'volunteering_id' => $data[1],
                    'name' => $data[2],
                    'surname' => $data[3],
                    'patronymic' => $data[4],
                    'time' => $data[5],
                    'date' => $data[6],
                    'car' => $data[7],
                    'about_yourself' => $data[8],
                ]);
            }

            fclose($handle);
        }
    }
}
