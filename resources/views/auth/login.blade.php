@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card border-0 bg-light">
                    <form action="{{  route('login')  }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Correo Electrónico:</label>
                                <input class="form-control" type="email" name="email" placeholder="correo@test.cl">
                            </div>
                            <div class="form-group">
                                <label >Contraseña:</label>
                                <input class="form-control" type="password" name="password" placeholder="*********">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" id="login-btn">Iniciar Sesión</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
