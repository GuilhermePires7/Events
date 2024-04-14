@extends('layouts.main')
@section('title', 'Crie seu evento')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do seu evento">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Cerveja Gratis"> Cerveja Gratis
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>

        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>
@endsection
