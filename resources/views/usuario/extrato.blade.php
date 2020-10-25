@extends('dashboard')

@section('topHead')
    {{__('Extrato Financeiro')}}
@endsection
    
@section('content')

    @isset($extrato)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Curso</th>
            <th scope="col">Créditos</th>
            <th scope="col">Débitos</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($extrato as $item)
        
            
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@</td>
            </tr>
              
            
        @endforeach
    </tbody>
</table>
    @endisset
<h1>olá </h1>
@endsection