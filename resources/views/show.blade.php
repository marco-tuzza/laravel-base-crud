@extends('layouts.app')

@section('page-title', 'Dettaglio studente')

@section('content')
<h1>Dettaglio studente</h1>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Matricola</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">{{$student->id}}</th>
        <td>{{$student->nome}}</td>
        <td>{{$student->cognome}}</td>
        <td>{{$student->matricola}}</td>
        <td>{{$student->email}}</td>
    </tr>
    </tbody>
  </table>
  <a class="btn btn-warning" href=" {{ route('students.edit', ['student'=>$student->id]) }}">Modifica dati studente</a>
  <a href=" {{route('students.index') }}">Torna alla lista</a>
@endsection