<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoDAO extends Model
{
    public static function saveCurso(Curso $objCurso){
        
        try{
            //$objCurso = new Curso;
            
           $res = DB::table('curso')
             ->insert(['nome_curso' => $objCurso->getCurso_nome(),
                    'carga_horaria' => $objCurso->getCurso_carga(),
                    ]);

            return $res ;       

        }catch(Exception $e){
            return 0;
        }            

    }

    public static function loadCursos(){
        try{
            $resp = DB::table('curso')->get();

            return $resp;
        }catch(Exception $e){
            return 0;
        }
    }
    use HasFactory;
}
