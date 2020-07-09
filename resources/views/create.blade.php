@extends('layouts.app')

@section('page-title', 'Creazione nuovo studente')

@section('content')
<h1>Creazione nuovo studente</h1>

<form action="{{ route ('students.store') }}" method="post">
@csrf
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name='nome' id="name">
    </div>
    <div class="form-group">
      <label for="lastname">Cognome</label>
      <input type="text" class="form-control" name='cognome' id="lastname">
    </div>
    <div class="form-group">
        <label for="number">Matricola</label>
        <input type="text" class="form-control" name='matricola' id="number">
        <small id="text" class="form-text text-muted">Quattro caratteri numerici.</small>
      </div>
      <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="mail" name='email' aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-success">Crea studente</button>
  </form>
  <a href=" {{route('students.index') }}">Torna alla lista</a>
@endsection