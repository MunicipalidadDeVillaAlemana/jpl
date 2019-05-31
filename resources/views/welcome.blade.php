@extends('layouts.app')

@section('content')
    <div class="col-8 mx-auto">
        <form action="{{  route('causes.new')  }}" method="post">
    @csrf
    <textarea class="form-control" name="rol" cols="30" rows="10"></textarea>
    <button class="btn btn-primary" id="create-cause">Crear Causa</button>
</form>
    </div>
@endsection()