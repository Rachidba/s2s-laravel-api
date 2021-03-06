<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        Student::create([
            'first_name' => 'Admin',
            'last_name'  => 'User',
            'year'       => '2016',
            'studies_level_id' => 1,
        ]);
    }
}
