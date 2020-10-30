@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
<b>NOME:</b><br>
    {{$nome}}<b>TIPO:</b><br>
    {{$tipo}}<br><b>JOGOS:</b>
    {{$jogos}}<br>
@endsection
