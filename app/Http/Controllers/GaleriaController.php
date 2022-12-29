<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes['galerias']=galeria::paginate(8);
      
       return view('galeria.index',$imagenes); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen'=>'required|image|max:2048'
        ]);
        $datos = request()->except('_token');
        if($request->hasFile('imagen')){
        $datos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        galeria::insert($datos); // Inserto los datos en la BD
        return redirect('galeria')->with('mensaje', ' Imagen agregada con éxito.');
        
   
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeria = galeria::findOrFail($id);
    
        return view ('galeria.edit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'imagen'=>'required|image|max:2048'
        ]);

        $galeria = Request()->except(['_token', '_method']);

        if($request->hasFile('imagen')){

            $galeria = galeria::findOrFail($id);

            Storage::delete('public/' . $galeria->imagen);

            $datosGaleria['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        galeria::where('id', '=', $id)->update($datosGaleria);

        $galeria = galeria::findOrFail($id);

        return redirect('galeria');
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Galeria::findOrFail($id);

        Storage::delete('public/' . $galeria->imagen);

        Galeria::destroy($id);
        return redirect('galeria')->with('mensaje','Imagen eliminada correctamente.');
    }
}
