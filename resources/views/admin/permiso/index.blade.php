@extends("theme.$theme.layout")

@section('titulo')
TITULO 
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuarios</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Vigencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id_usuario}}</td>
                                <td>{{$usuario->nombre_usuario}}</td>
                                <td>{{$usuario->vigencia}}</td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
