@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Formulario de causas
                    </div>
                    <div class="card-body">
                        <form action="{{  route('causes.new')  }}" method="post">
                            @csrf
                            <label>Número de Rol</label>
                            <input class="form-control" name="rol" type="text" placeholder="180.890"></input>
                            <label>Nombre del(los) Demandante(s)</label>
                            <input class="form-control" name="complainant_name" type="text" placeholder="Roberto Carlos Díaz Riquelme, ..."></input>
                            <label>Nombre del(los) Demandado(s)</label>
                            <input class="form-control" name="denounced_name" type="text" placeholder="Luis Esteban Alvarez Gutierrez, ..."></input>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccione Tipo</label>
                                <select name="primary_category"class="form-control" >
                                    <option>Tipo Principal</option>
                                    <option>Tipo Principal2</option>
                                    <option>Tipo Principal3</option>
                                    <option>Tipo Principal4</option>
                                    <option>Tipo Principal5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccione sub-tipo</label>
                                <select name="secondary_category"class="form-control" >
                                    <option>sub-tipo 1</option>
                                    <option>sub-tipo 2</option>
                                    <option>sub-tipo 3</option>
                                    <option>sub-tipo 4</option>
                                    <option>sub-tipo 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccione Estado</label>
                                <select name="state"class="form-control" >
                                    <option>Inicial</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>Cerrado</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" id="create-cause">Crear Causa</button>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection()