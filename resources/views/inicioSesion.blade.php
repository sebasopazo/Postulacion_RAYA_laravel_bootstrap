
@extends('layout.master')
@section('title', 'Accediendo panel admin')
@section('content')
  <br />
  <br />
  <div class=" backgroundGold">
    <div class="container box padding75 backgroundBlanco">
      <h2 align-text="center">Ingrese credenciales de administrador</h2>
   
      @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
       <strong>{{ $message }}</strong>
      </div>
      @endif
   
      @if (count($errors) > 0)
       <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
        </ul>
       </div>
      @endif
   
      <form method="POST">
       {{ csrf_field() }}
       <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
       </div>
       <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" required>
       </div>
       <div class="form-group justify-content-center d-flex">
        <input type="submit" class= "buttonRound" value="inicioSesion" />
        <a class="buttonRound" href="/" role="button" value="Volver"> Volver </a>
       </div>
       
        
      </form>
      <div >
    
      </div>
     </div>
  </div>

  @endsection

