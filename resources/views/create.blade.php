@extends('layouts.app')

@section('page-title', 'Creazione nuovo studente')

@section('content')
<h1>Creazione nuovo studente</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route ('students.store') }}" method="post">
@csrf
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name='nome' id="name" value="{{ old('nome') }}">
    </div>
    <div class="form-group">
      <label for="lastname">Cognome</label>
      <input type="text" class="form-control" name='cognome' id="lastname" value="{{ old('cognome') }}">
    </div>
    <div class="form-group">
        <label for="number">Matricola</label>
        <input type="text" class="form-control" name='matricola' id="number" value="{{ old('matricola') }}">
        <small id="text" class="form-text text-muted">Quattro caratteri numerici.</small>
      </div>
      <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="mail" name='email' value="{{ old('mail') }}" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-success">Crea studente</button>
  </form>
  <a href=" {{ route('students.index') }}">Torna alla lista</a>
@endsection