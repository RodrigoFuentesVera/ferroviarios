@extends("theme.$theme.layout")
@section("titulo")
Menú
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Menús - Rol</h3>
            </div>
            <div class="box-body">
                @csrf
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Menú</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                        @if ($menu["id_padre"] != null)
                            @continue
                        @endif
                            <tr>
                                <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i> {{$menu["nombre_menu"]}}</td>
                            </tr>
                            @foreach($menu["submenu"] as $key => $hijo)
                                <tr>
                                    <td class="pl-40"><i class="fa fa-arrow-right"></i> {{ $hijo["nombre_menu"] }}</td>
                                </tr>
                                @foreach ($hijo["submenu"] as $key => $hijo2)
                                    <tr>
                                        <td class="pl-80"><i class="fa fa-arrow-right"></i> {{$hijo2["nombre_menu"]}}</td>
                                    </tr>
                                    @foreach ($hijo2["submenu"] as $key => $hijo3)
                                        <tr>
                                            <td class="pl-120"><i class="fa fa-arrow-right"></i> {{$hijo3["nombre_menu"]}}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection
