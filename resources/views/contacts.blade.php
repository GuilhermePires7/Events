@extends('layouts.main')
@section('title', 'Contatos')
@section('content')
    <h1>Tela de Contatos</h1>
    @if ($busca != '')
        <p>Sou bonito, gostoso, jogo bola, e danço</p>
        <h1>Recebe um {{$busca}}</h1>
        @else
        <p>Você recebeu nadaaa</p>
    @endif

@endsection
