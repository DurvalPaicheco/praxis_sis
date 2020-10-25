@extends('dashboard')

@section('topHead')
    <!-- Importação Jquery-->
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    
    
    
    {{__('Cadastrar Aluno')}}
@endsection

@section('content')
    <form id='cad_aluno' method="POST" action="{{url('/cadastro_aluno')}}">
        @csrf
        <div class="form-group">
            <label for="nomeEx">Nome Completo</label>
            <input type="text" name='name' class="form-control" id="nome" autocomplete="off" >
            
        </div>  
        
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
                @isset($cursos)
                @foreach ($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->nome_curso}} -- {{$curso->carga_horaria}} Horas</option>    
                @endforeach
                @endisset
                @if (count($cursos) < 1)
                    <option value='0'> Primeiro é nescessário cadastrar um Curso</option>
                @endif
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
            <input type="password" name='password' value="" class="form-control" id="password" placeholder="Senha" autocomplete="off">
        </div>
        
        <button onclick="validaForm()" type="submit" class="btn btn-primary">Enviar</button>
    </form>

    
    <script src="{{ url('js/cadastro.js') }}"></script>
@endsection

