@extends('dashboard')

@section('topHead')
    {{__('Início')}}
@endsection

@section('content')

@isset($resp)
    <h2 class="text-center"  >{{$resp}}</h2>
@endisset
<h1  class="text-center" >Seja Bem-Vindo a Praxis !</h1>
@endsection