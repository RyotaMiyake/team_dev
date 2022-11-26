<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Curriculum;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curricula')->insert([
            'curriculum' => '1-1',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '2-1',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '3-1',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '3-2',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '4-1',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '5-1',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '6-1',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '6-2',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '7-1',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-1',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-2',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-3',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-4',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-5',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '8-6',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '9-1',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '9-2',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '9-3',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '9-4',   
        ]);
        DB::table('curricula')->insert([
            'curriculum' => '成果物作成',
        ]);
        DB::table('curricula')->insert([
            'curriculum' => 'その他',   
        ]);
    
    }
}
