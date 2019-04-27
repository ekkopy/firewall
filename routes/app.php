<?php

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::name('dashboard.')
        ->group(function () {

            // GET ROUTES
            Route::get('/listar', 'DashboardController@listar')->name('listar');
    });
});

Route::prefix('usuarios')->middleware(['auth'])->group(function () {
    Route::name('usuarios.')
    ->group(function () {

        // GET ROUTES
        Route::get('/listar', 'UsuarioController@listar')->name('listar');
        Route::get('/cadastrar', 'UsuarioController@cadastrar')->name('cadastrar'); 
        Route::get('/editar/{id}', 'UsuarioController@editar')->name('editar');

        // POST ROUTES
        Route::post('/cadastrar', 'UsuarioController@cadastrar_usuario')->name('cadastrar_usuario');    
        Route::post('/editar_usuario','UsuarioController@editar_usuario')->name('editar_usuario');
        Route::post('/excluir','UsuarioController@excluir_usuario')->name('excluir_usuario');    
                                  
    });
});

Route::prefix('permissoes')->middleware(['auth'])->group(function () {
    Route::name('permissoes.')
    ->group(function () {

        // GET ROUTES
        Route::get('/listar', 'PermissaoController@listar')->name('listar');
    });
});

Route::prefix('relatorios')->middleware(['auth'])->group(function () {
    Route::name('relatorios.')
    ->group(function () {

        // GET ROUTES
        Route::get('/listar', 'RelatorioController@listar')->name('listar');
    });
});

Route::prefix('firewall')->middleware(['auth'])->group(function () {
    Route::name('firewall.')
    ->group(function () {

        // GET ROUTES
        Route::get('/listar', 'FirewallController@listar')->name('listar');
    });
});