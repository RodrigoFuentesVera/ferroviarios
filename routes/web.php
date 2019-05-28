<?php

Route::get('/', 'InicioController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
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
    Route::post('cuotas', 'CuotasController@guardar')->name('guardar_cuota');
});
