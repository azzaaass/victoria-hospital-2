<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedichineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medichines')->insert([
            'id_category' => '1',
            'name' => 'Cetirizine HCL 10 Mg contains 50 Tablets',
            'price' => '22.000',
            'description' => 'an antihistamine used to relieve allergy symptoms such as watery eyes, runny nose, itching eyes/nose, and sneezing. It is also used to treat itching and swelling caused by chronic urticaria (hives). Cetirizine works by blocking a certain natural substance (histamine) that your body makes during an allergic reaction.'
        ]);
    }
}
