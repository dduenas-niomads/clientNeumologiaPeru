@extends('base')
@extends('layouts.app')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar horario</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('schedules.store') }}">
          @csrf
          <div class="form-group">    
              <label for="date">Fecha:</label>
              <input type="text" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="hour">Hour:</label>
              <input type="text" class="form-control" name="hour"/>
          </div>
          <div class="form-group">
              <label for="duration">Duración:</label>
              <input type="text" class="form-control" name="duration"/>
          </div>
          <div class="form-group">
              <label for="capacity">Capacidad:</label>
              <input type="text" class="form-control" name="capacity"/>
          </div>                         
          <button type="submit" class="btn btn-primary">Reservar</button>
      </form>
  </div>
</div>
</div>
@endsection