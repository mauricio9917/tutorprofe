<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    public function index(){ //Muestra la página principal

        $cursos = Servicio::orderBy('id', 'desc')->paginate();


        return view("cursos.index", compact('cursos'));
    }

    public function create(){ //Crear una sección
        return view("cursos.create");
    }

    public function store(Request $request){
        $curso = new Servicio();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
        // return $request->all();
    }

    public function show(Curso $curso){ //Muestra una sección en particular
        // return view("cursos.show", ["curso" => $curso]);
        return view("cursos.show", compact("curso"));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
        // $curso = Curso::find($id);
        // return $curso;
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        
        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }
}
