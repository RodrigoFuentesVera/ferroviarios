@extends("theme.$theme.layout")
@section('titulo')
Menú 
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}">
@endsection

@section('scriptsPlugins')
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="javascript"></script>
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Menús</h3>
            </div>
            <div class="box-body">
                @csrf
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                            @if ($item["id_padre"] != null)
                                @break
                            @endif
                            @include("admin.menu.menu-item", ["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection