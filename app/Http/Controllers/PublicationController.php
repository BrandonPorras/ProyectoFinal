<?php

namespace INTEGRATEITM\Http\Controllers;

use Illuminate\Http\Request;

use INTEGRATEITM\User;
use INTEGRATEITM\Publication;

use INTEGRATEITM\Http\Requests\StorePublicationRequest;
use INTEGRATEITM\Http\Requests\UpdatePublicationRequest;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        return view('publications.create', ['user'=> $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen_publication = 'image-not-found.png';
        if ($request->hasFile('imagen_publication')) {
            $file = $request->imagen_publication;

            $imagen_publication = time() . $file->getClientOriginalName();
            $file->storeAs('public/imgPublications', $imagen_publication);
        }
        $publication = new Publication();

        $publication->titulo  = $request->titulo;
        $publication->text = $request->text;        
        $publication->categoria = $request->categoria;        
        $publication->img = $imagen_publication;

        $user = User::where('id', $request->user)->first();
        $publication->user()->associate($user);     

        $publication->save();

        return redirect()->route('home')->with('success', "Publication added");  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        return view('publications.edit', ['publication' => $publication]);
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
        $this->validate($request, [
            'titulo' => 'required'
           
        ]);

        // $publication = publication::findOrFail($id);

        if ($request->hasFile('img')) {

            // Eliminar imagen si  se va a actualizar
            $filePath = storage_path('app/public/images/' . $publication->img);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Subir nueva imagen
            $file = $request->file('img');

            $image_profile = time() . $file->getClientOriginalName();

            $publication->img = $image_profile;

            $file->storeAs('public/images', $image_profile);
        }

        $publication->title = $request->title;


        $publication->save();

        return redirect()->route('publications.show', $publication)->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filePath = storage_path('app/public/images/imgPublications' . $publication->img);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // File::delete($filePath);

        $publication->delete();
        return redirect('/publications')->with('success', 'Eliminado');
    }
}
