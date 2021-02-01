@extends('base') 
@extends('layouts.app')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar horario</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('schedules.update', $schedule->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="date">Fecha:</label>
                <input type="text" class="form-control" name="date" value="{{ $schedule->date }}" />
            </div>         
            <div class="form-group">
                <label for="hour">Hora:</label>
                <input type="text" class="form-control" name="hour" value="{{ $schedule->hour }}" />
            </div> 
            <div class="form-group">
                <label for="duration">Duración:</label>
                <input type="text" class="form-control" name="duration" value="{{ $schedule->duration }}" />
            </div>  
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="text" class="form-control" name="capacity" value="{{ $schedule->capacity }}" />
            </div>    
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection