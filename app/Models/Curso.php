<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\UserDAO;
use Illuminate\Support\Facades\DB;

class Curso extends Model
{
    private $curso_nome;
    private $curso_carga;

    public function setCurso_nome($curso_nome){
        $this->curso_nome = $curso_nome;
    }

    public function getCurso_nome(){
        return $this->curso_nome;
    }

    public function setCurso_carga($curso_carga){
        $this->curso_carga = $curso_carga;
    }

    public function getCurso_carga(){
        return $this->curso_carga;
    }

    public function saveCurso(){
        $res = DB::table('curso')
             ->insert(['nome_curso' => $this->curso_nome,
                  'carga_horaria' => $this->curso_carga,
                    ]);

        return $res;
    }
    use HasFactory;
}
