<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use Session;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crea una variable y almacena todas las publicaciones de noticias en ella desde la base de datos
        $noticias = Noticia::all();

        //return una vista y pasa a la variable anterior
        return view('noticias.index')->withNoticias($noticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar el dato
        $this->validate($request, array(
          'title' => 'required|max:255',
          'body' => 'required' ));

        //Guardar en la base de datos
        $noticia = new Noticia;

        $noticia->titulo = $request->title;
        $noticia->contenido = $request->body;

        $noticia->save();

        Session::flash('success', 'La noticia se creó satisfactoriamente');

        //Redireccionar  a otra pagina
        return redirect()->route('noticias.show', $noticia->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $noticia = Noticia::find($id);
      return view('noticias.show')->withNotica($noticia);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Busca la publicación en la base de datos y la guarda en una variable
        $noticia = Noticia::find($id);
        // retorna la vista y pasa la variable previamente creada.
        return view('noticia.edit')->withNotica($noticia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
