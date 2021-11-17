@extends('layouts.main')

@section('title', 'Criar um agendamento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Marque sua consulta</h1>
        <form action="/reserves" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Especialidade</label>
                <input type="text" class="form-control" id="title" name="specialty" placeholder="Tipo da consulta">
            </div>
            <div class="form-group">
                <label for="title">Nome do médico</label>
                <input type="text" class="form-control" id="title" name="name_doctor" placeholder="Nome do médico">
            </div>
            <div class="form-group">
                <label for="title">Está consulta é um retorno?</label>
                <select name="retorn" id="retorn" name="retorn" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Marcar consulta">
            </div>
        </form>
    </div>
@endsection