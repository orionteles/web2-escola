<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'codigo', 'duracao'];
    protected $dates = ['deleted_at'];

    public function disciplinas()
    {
        return $this->hasMany('\App\Disciplina');
    }
}
