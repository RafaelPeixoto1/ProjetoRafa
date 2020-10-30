<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
    <h2>@yield('header')</h2>
        <main role="main">
        
    <div class="jumbotron">
        <div class="container">
             <div class="text-center">
        <h1 class="display-3">Rafa Games</h1>
         <div class="alert alert-primary" role="alert">
<p><strong><em>Lojas online & Pré-vendas </em></strong></p>
</div>   
         
        </div>
        </div>
        </div>
        @yield('conteudo')
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="entrada">RGames</a>
        <button class="navbar-toggler"type="button"data-toogle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"aria-expanded="false" aria-label="Toogle navigation">
        <span class="navbar-tooggler-icon"></span>
        </button>
        <a class="nav-link" href="contactos">Contactos<span class="sr-only">(atual)</span>
                </a>
        <div class="collapse navbar-collapse"id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://pt.webuy.com/"target="_blank">Link</a>
            </li>
            <a class="nav-link" href="sobrenos">Sobre nos<span class="sr-only">(atual)</span>
                </a>

         
    
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>  
