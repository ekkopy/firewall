<?php

Route::prefix('dashboard')->group(function () {
    Route::name('dashboard.')
        ->group(function () {
            Route::get('/listar', 'DashboardController@listar', function () {
                return view('layouts.app.dashboard.listar');
            })->name('listar');
        });
});

Route::prefix('usuarios')->group(function () {
    Route::name('usuarios.')
        ->group(function () {
            Route::get('/listar', 'UsuarioController@listar')->name('listar');

            Route::get('/cadastrar', function () {
                // Busca permissões de acordo com o nível de acesso diferente de S (Sistema)
                $permissoes = \App\Permissao::all()->where("nivel", "!=", "S");

                return view('layouts.app.usuarios.cadastrar', [
                    'permissoes' => $permissoes,
                ]);
            })->name('cadastrar'); 


            Route::post('/cadastrar', 'UsuarioController@cadastrar')->name('cadastrar');                       
        });
});

Route::prefix('permissoes')->group(function () {
    Route::name('permissoes.')
        ->group(function () {
            Route::get('/listar', 'PermissaoController@listar', function () {
                return view('layouts.app.permissoes.listar');
            })->name('listar');
        });
});