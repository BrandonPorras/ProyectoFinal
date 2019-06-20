<?php

namespace INTEGRATEITM\Http\Controllers;

use Illuminate\Http\Request;

use INTEGRATEITM\User;
use INTEGRATEITM\Publication;

use INTEGRATEITM\Http\Requests\StorePublicationRequest;
use INTEGRATEITM\Http\Requests\UpdatePublicationRequest;
use Illuminate\Database\Eloquent\Builder;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->get('search')!=""){
          //  $publications = Publication::title($request->get('search'));
            $publications =Publication::whereLike(['titulo', 'categoria'], $request->get('search'))->get();
       }else{                        
            $publications = Publication::all();}
           
        return view('publications.publications', ['publications' => $publications]); 
       
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

        $publications = Publication::all();
        return redirect()->route('publications.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return view('publications.show', ['publication'=> $publication]);
    }


    public function showAuthorize()
    {
        $publications[] = Publication::all();
        $users []= User::all();

        
        return view('publications.showAuthorize', [ $publications, $users]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication, User $user)
    {
        return view('publications.edit', ['publication' => $publication,'user'=>$user]);
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
        // $this->validate($request, [
        //     'titulo' => 'required',
        //     'img' => 'image|nullable|max:1999',
        //     'text' => 'required',
        //     'categoria' => 'required',
        //     'state' => '0'
        // ]);

        $publication = publication::findOrFail($id);

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

        $publication->titulo = $request->titulo;
        $publication->text = $request->text;
        $publication->state ="0";
        
      


        $publication->save();

        return redirect()->route('publications.show', $publication)->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
      
        $filePath = storage_path('app/public/imgPublications' . $publication->img);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // File::delete($filePath);

        $publication->delete();
        return redirect('/publications')->with('success', 'Eliminado');
    }


    ///////////////////////////allow

    public function allow($id )
    {   
        $publication = publication::findOrFail($id);
        // $publication->img = $request->img; 
        // $publication->titulo = $request->titulo;
        // $publication->text = $request->text;
        $publication->state ="1";    
        $publication->save();

        return redirect()->route('publications.show', $publication)->with('success', 'Actualizado');
    }
}
