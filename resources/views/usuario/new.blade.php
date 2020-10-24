@extends('dashboard')

@section('topHead')
    <!-- Importação Jquery-->
 <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
    
    {{__('Cadastrar Aluno')}}
@endsection

@section('content')
    <form method="POST" action="{{url('/valida')}}">
        <div class="form-group">
            <label for="nomeEx">Nome Completo</label>
            <input type="text" name='name' class="form-control" id="nome" autocomplete="off" >
            
        </div>  
        @php
           
        @endphp
        <div class="form-group">
            <label for="idadeEx">Idade</label>
            <input type="text" name='idade' class="form-control" id="idade" maxlength="2" autocomplete="off" >
            
        </div> 

        <div class="form-group">
            <label for="tefeoneEx">Telefone</label>
            <input type="text" name='telefone' placeholder="Ex: (33) 99999-9999" class="form-control" id="tefeone" maxlength="11" >
            
        </div> 

        <div class="form-group">
            <label for="cursoEx">Curso</label>
            <select class="form-control" id="curso">
              <option>Selecione</option>
              <option value='1'>Medicina</option>
              
            </select>
        </div>
        
        <div class="form-group">
            <label for="emailEx">Email</label>
            <input type="email" name='email' class="form-control" id="email" aria-describedby="emailajuda" placeholder="Ex: pedro@gmail.com">
            
        </div>

        <div class="form-group">
            <label for="tefeoneEx">Usuário</label>
            <input type="text" name='usuario'  class="form-control" id="usuario" maxlength="20" autocomplete="off" >
            
        </div>

        <div class="form-group">
            <label for="passEx">Password</label>
            <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    
    <script src="{{ url('js/cadastro.js') }}"></script>
@endsection

