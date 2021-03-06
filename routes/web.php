<?php

Route::get('/', 'InicioController@index')->name('inicio')->middleware('auth');
Route::get('login', 'Seguridad\LoginController@index')->name('login');
Route::post('login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('perfil', 'Seguridad\PerfilController@index')->name('perfil');
Route::post('perfil', 'Seguridad\PerfilController@perfil')->name('perfil_post');
Route::get('logout', 'Seguridad\LoginController@logout')->name('logout');
Route::get('inicio', 'InicioController@index')->name('inicio')->middleware('auth');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'permisoPresidente']], function(){
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');

    Route::get('equipo', 'EquipoController@index')->name('equipo');
    Route::get('equipo/crear', 'EquipoController@crear')->name('crear_equipo');
    Route::post('equipo', 'EquipoController@guardar')->name('guardar_equipo');

    Route::get('anio', 'AnioController@index')->name('anio');
    Route::get('anio/crear', 'AnioController@crear')->name('crear_anio');
    Route::post('anio', 'AnioController@guardar')->name('guardar_anio');
});

Route::group(['prefix' => 'integrante', 'namespace' => 'Integrante'], function(){
    Route::get('integrantes', 'IntegranteController@index')->name('integrante');
    Route::get('integrantes/crear', 'IntegranteController@crear')->name('crear_integrante');
    Route::post('integrantes', 'IntegranteController@guardar')->name('guardar_integrante');

    Route::get('retirados', 'RetiradosController@index')->name('retirados');
});

Route::group(['prefix' => 'finanzas', 'namespace' => 'Finanzas'], function(){
    Route::get('cuotas/registrar', 'RegistrarCuotasController@registrar')->name('registrar_cuotas');
    Route::get('cuotas/mostrar/{anio?}/{integrante?}', 'RegistrarCuotasController@mostrar')->name('mostrar_cuotas');
    Route::post('cuotas/{id_mes}/{id_anio?}/{id_integrante?}', 'RegistrarCuotasController@guardar')->name('guardar_cuota');
});

Route::group(['prefix' => 'equipo', 'namespace' => 'Equipo'], function(){
    Route::get('adulto/roster', 'RosterAdultoController@index')->name('adulto_roster');
    Route::get('adulto/partido', 'PartidoAdultoController@index')->name('adulto_partido');
    Route::get('adulto/partido/crear', 'PartidoAdultoController@crear')->name('adulto_partido_crear');
    Route::get('adulto/partido/{id_partido}/editar', 'PartidoAdultoController@editar')->name('partido_adulto_editar');
});
