@extends('base')
@extends('layouts.app')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Horarios</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Fecha</td>
          <td>Hora</td>
          <td>Duración</td>
          <td>Capacidad</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($schedules as $schedule)
        <tr>
            <td>{{$schedule->id}}</td>
            <td>{{$schedule->date}}</td>
            <td>{{$schedule->hour}}</td>
            <td>{{$schedule->duration}}</td>
            <td>{{$schedule->capacity}}</td>
            <td>
                <a href="{{ route('schedules.edit',$schedule->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('schedules.destroy', $schedule->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection