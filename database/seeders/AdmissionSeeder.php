<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admission;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admissions')->insert([
            'admission' => '9月前期',   
        ]);
        DB::table('admissions')->insert([
            'admission' => '9月後期',
        ]);
        DB::table('admissions')->insert([
            'admission' => '10月前期',
        ]);
        DB::table('admissions')->insert([
            'admission' => '10月後期',
        ]);
    }
}
