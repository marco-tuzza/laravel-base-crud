@extends('layouts.app')

@section('page-title', 'Lista Studenti')

@section('content')
<h1>Lista Studenti</h1>
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
    @foreach ($students as $studente)
    <tr>
        <th scope="row">{{$studente->id}}</th>
        <td>{{$studente->nome}}</td>
        <td>{{$studente->cognome}}</td>
        <td>{{$studente->matricola}}</td>
        <td>{{$studente->email}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection