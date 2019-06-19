@extends("theme.$theme.layout")

@section('titulo')
Bienvenidos
@endsection
@section('subtitulo')
Bienvenidos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h1>Bienvenidos</h1>
    </div>
</div>  
@include('includes.form-error')
@endsection 