<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db:table('students')->insert([
            'stuName'=>str::random(20),
            'stuClass'=>rand(1,12),
            'created_at'=>date("Y-m-d H-i-s"),
            'updated_at'=>date("Y-m-d H-i-s"),
        ]);
    }
}
