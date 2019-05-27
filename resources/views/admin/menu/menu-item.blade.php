@if ($item["submenu"] == [])
    <li class="dd-item dd3-item" data-id="{{$item["id_menu"]}}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
            <a href="{{url("admin/menu/". $item["id_menu"] . "/editar")}}">{{$item["nombre_menu"] . " | URL -> " . $item["url"]}} </a>
        </div>
    </li>
@else
    <li class="dd-item dd3-item" data-id="{{$item["id_menu"]}}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
            <a href="{{url("admin/menu/". $item["id_menu"] . "/editar")}}">{{$item["nombre_menu"] . " | URL -> " . $item["url"]}} </a>
        </div>
        <ol class="dd-list">
            @foreach ($item["submenu"] as $submenu)
                @include("admin.menu.menu-item", [ "item" => $submenu])
            @endforeach
        </ol>
    </li>
@endif
