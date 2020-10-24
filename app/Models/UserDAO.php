<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class UserDAO extends Model
{
    use HasFactory;

    public static function loadUser(){
        try{
            return DB::table('users')
            ->select('name')->where('id',Auth::id())->get();

            //return $resp;
        }catch(Exception $e){
            return 'Erro ao carregar dados';
        }
        
    }

    public static function verificaPermissao(){
        $acesso= DB::table('users')
                    ->select('nivel_acesso')
                    ->where('id',Auth::id())
                    ->get();
    foreach( $acesso as $acess => $value){
        $acessoL = $value;
    }
    session()->put('usuario_acesso',$acessoL);

        return $acessoL;
    }
}
