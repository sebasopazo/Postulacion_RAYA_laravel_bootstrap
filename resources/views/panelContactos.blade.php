@extends('layout.master')
@section('title', 'Accediendo panel admin')
@section('content')
<div class="table-responsive styled-table">
  <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th><strong>Nombre</strong></th>
        <th><strong>Rut</strong></th>
        <th><strong>Direccion</strong></th>
        <th><strong>Telefono</strong></th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($contactos as $key => $data)
      <tr>    
        <th>{{$data->nombre}}</th>
        <th>{{$data->rut}}</th>
        <th>{{$data->direccion}}</th>
        <th>{{$data->telefono}}</th>       
      </tr>
  @endforeach
    </tbody>
  </table>
<div class="container justify-content-center d-flex"> 
  <p class="lead">
    <a class="buttonRound" href="/" role="button">Volver</a>
  </p>
</div>
</div>
@endsection

 
