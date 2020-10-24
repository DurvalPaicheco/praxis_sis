@extends('dashboard')

@section('topHead')
    <!-- Importação Jquery-->
 <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
    
    {{__('Cadastrar Aluno')}}
@endsection

@section('content')
    <form method="GET" action="{{url('/valida_curso')}}">
        <div class="form-group">
            <label for="nomeCEx">Nome Curso</label>
            <input type="text" name='nome_curso' class="form-control" id="nome_curso" autocomplete="off" >
            
        </div>  

        <div class="form-group">
            <label for="cargaEx">Carga Horária</label>
            <input type="text" name='carga_horaria' class="form-control" id="carga_horaria" autocomplete="off" maxlength="4">
            
        </div>  
        
        
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    
    
@endsection

