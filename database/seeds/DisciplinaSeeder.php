<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            ['nome'=>'Web 1', 'curso_id'=>'1'],
            ['nome'=>'Web 2', 'curso_id'=>'1'],
            ['nome'=>'Direito Administrativo', 'curso_id'=>'2'],
        ]);
    }
}
