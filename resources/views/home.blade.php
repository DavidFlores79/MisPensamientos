@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3 ">
                <div class="card-header">¿En que estás pensando ahora?</div>
                <div class="card-body">

                    <form action="">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en:</label>
                            <input type="text" name="thought" id="" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Publicado en 28/08/2020</div>

                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia fugiat facere autem soluta impedit omnis, consequuntur tempore animi, illo consectetur repellendus alias modi, explicabo molestiae sequi corrupti non illum?</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
