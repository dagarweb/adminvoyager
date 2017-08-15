<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['web']], function () {

    Route::get('/blog', [
        'uses' => 'BlogController@index',
        'as' => 'blog.blog'
    ]);
    Route::get('/blog/{slug}', [
        'uses' => 'BlogController@show',
        'as' => 'blog.show'
    ]);

// paginas
    Route::get('/paginas/{slug}', [
        'uses' => 'PaginasController@show',
        'as' => 'paginas.show'
    ]);

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contacta/', 'ContactaController@index')->name('contacta');
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'es|en|fr'
    ]);
    Route::post('sendcontacta', function(\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
        $mailer
//    ->to($request->input('email'))
            ->to('info@dagarweb.com')
            ->send(new \App\Mail\SendContacta($request->input('nombre'),$request->input('telefono'),$request->input('email'),$request->input('mensaje')));
        $request->session()->flash('alert-success', 'Consulta enviada correctamente, pronto contactaremos con usted!');

        DB::table('contacta')->insert(
            ['nombre' => $request->nombre, 'email' => $request->email, 'telefono' => $request->telefono, 'mensaje' => $request->mensaje, 'created_at' => $request->updated_at, 'created_at' => $request->updated_at]
        );

        return redirect()->back();
    })->name('sendcontacta');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

/*Rutas privadas solo para usuarios autenticados*/
Route::get('/nosotros/', 'NosotrosController@index')->middleware('auth');
