<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            ['nome'=>'Análise e Desenvolvimento', 'codigo'=>'ADS', 'duracao'=>5],
            ['nome'=>'Redes', 'codigo'=>'RD', 'duracao'=>5],
            ['nome'=>'Direito', 'codigo'=>'Dir', 'duracao'=>10],
            ['nome'=>'Enfermagem', 'codigo'=>'Enf', 'duracao'=>8],
            ['nome'=>'Odontologia', 'codigo'=>'Odonto', 'duracao'=>10],
        ]);
    }
}
