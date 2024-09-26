<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('../database/data/needs.csv');

        // Открываем файл для чтения
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Пропускаем заголовок
            fgetcsv($handle);

            // Читаем данные построчно
            while (($data = fgetcsv($handle)) !== false) {
                DB::table('needs')->insert([
                    'need' => $data[0],
                    'unit' => $data[1],
                ]);
            }

            fclose($handle);
        }
    }
}
