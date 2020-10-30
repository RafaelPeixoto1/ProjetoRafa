@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')
<a href="{{route('mostrar.form')}}">Dados:</a>
<!--aqui fica o form -->
<form method="post" action="{{route('processar.form')}}">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <br>
    
<label for="tipo">Tipo</label>
    <input type="text" name="tipo">
    <br>
    
<label for="jogos">jogos</label>
<select name="jogos">
    <option value="playstation">playstation</option>
    <option value="pc">pc</option>
    <option value="xbox">xbox</option>
    
    </select>
    <br>
    
    <button type="submit">Enviar</button>
</form>
@endsection
