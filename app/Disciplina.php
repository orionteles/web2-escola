<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'curso_id'];
    protected $dates = ['deleted_at'];
    
    public function curso()
    {
        return $this->belongsTo('\App\Curso');
    }
}
