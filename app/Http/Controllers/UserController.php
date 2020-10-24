<?php

namespace App\Http\Controllers;

use App\Models\User;
use  App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $objUser;
    private $objCurso;
    public function index(){
        return view('usuario.welcome');
    }

    public function list(){
        
        $objUser = new User();
        $res = $objUser->loadUser();
        return  $res;

        
    }

    function __construct()
    {
        $this->objUser = new User();
        $this->objCurso = new Curso();
    }

    /*public function welcome(){
        return view('usuario.welcome');
    }*/

    public function new(){
        $acesso = $this->objUser->verificaPermissao();     
        
        if($acesso == 1){
            return view('usuario.new',compact('acesso'));
        }else{
            return 'acesso não permitido !';
        }
        // sem demais tratativas devido ao tempo
    }

    public function extrato(){
        return view('usuario.extrato');
    }

    public function credito(){
        return view('usuario.lanc_credito');
    }

    public function debito(){
        return view('usuario.lanc_debito');

    }

    public function newCurso(){
        return view('usuario.cad_curso');
    }

    public function valida(){
       

    }


    public function validaCurso(REQUEST $request){
        
        $this->objCurso->setCurso_nome($request->input('nome_curso'));
        $this->objCurso->setCurso_carga($request->input('carga_horaria'));
        $resp = $this->objCurso->saveCurso();

        if($resp == 1){
            $resp = 'dados inseridos com sucesso !';
            return view('usuario.welcome',compact('resp'));
        }else{
            return 'Erro ao inserir dados';
        }

        //return $objCurso;
        
    }
}
