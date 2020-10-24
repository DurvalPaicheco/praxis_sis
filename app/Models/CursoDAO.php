<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoDAO extends Model
{
    public static function saveCurso($nome , $carga){
        
        try{
           /*DB::table('curso')
             ->insert(['nome_curso',$nome,
                  'carga_horaria',$carga,
                    ]);

            return 'Curso Inserido com sucesso';    */  
        }catch(Exception $e){
            return 'ERRO AO INSERIR CURSO';
        }            

    }
    use HasFactory;
}
