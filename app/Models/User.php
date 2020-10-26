<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    #use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    private $user_nome;
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_status;
    private $user_nome_completo ;
    private $user_idade;
    private $user_dataNasc;
    private $user_mae;


    public function getUser_nome(){
        return $this->user_nome;
    }
    public function setUser_nome($user_nome){
        $this->user_nome = $user_nome;
    }
    public function getUser_password(){
        return $this->user_pasword;
    }
    public function setUser_pasword($user_pasword){
        $this->user_pasword = $user_pasword;
    }
    public function getUser_pass(){
        return $this->user_pass;
    }

    public function setUser_pass($user_pass){
        $this->user_pass = $user_pass;
    }

    public function getUser_email(){
        return $this->user_email;
    }
    public function setUser_email($user_email){
        $this->user_email = $user_email;
    }
    public function getUser_nome_completo(){
        return $this->user_nome_completo;
    }
    public function setUser_nome_completo($user_nome_completo){
        $this->user_nome_completo = $user_nome_completo;
    }
    public function getUser_idade(){
        return $this->user_idade;
    }
    public function setUser_idade($user_idade){
        $this->user_idade = $user_idade;
    }
    public function getUser_dataNasc(){
        return $this->user_dataNasc;
    }
    public function setUser_dataNasc($user_dataNasc){
        $this->user_dataNasc = $user_dataNasc;
    }
    public function getUser_mae(){
        return $this->user_mae;
    }
    public function setUser_mae($user_mae){
        $this->user_mae = $user_mae;
    }

    public function loadUser(){
        $resp = UserDAO::loadUser();
        
        return $resp;
    }

    public function verificaPermissao(){
        $acesso = UserDAO::verificaPermissao();
        return $acesso->nivel_acesso;
    }

    public function loadContabilidade(){
        
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mae',
        'nome_completo',
        'idade',
        'dataNasc',
        'cpf',
        'nivel_acesso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
