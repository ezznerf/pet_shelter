<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        {
            $filePath = storage_path('../database/data/pets.csv');

            // Открываем файл для чтения
            if (($handle = fopen($filePath, 'r')) !== false) {
                // Пропускаем заголовок
                fgetcsv($handle);

                // Читаем данные построчно
                while (($data = fgetcsv($handle)) !== false) {
                    DB::table('pets')->insert([
                        'shelter_id' => $data[0],
                        'breed' => $data[1],
                        'name' => $data[2],
                        'age' => $data[3],
                        'description' => $data[4],
                    ]);
                }

                fclose($handle);
            }
        }
    }
}
