<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuario;
class usuarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        usuario::factory()->count(100)->create();
    }
}
