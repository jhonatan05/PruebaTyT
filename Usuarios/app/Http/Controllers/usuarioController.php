<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuario.index', [
            'usuarios'=> usuario::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->input();
        usuario::create($data);
        return redirect('/usuario');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuario.edit',[
            'usuario'=>$usuario
        ]);
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
        $data= $request->input();
        $arrayData=[
            "name" => $data['name'],
            "date" => $data['date'],
            "career" => $data['career']
        ];
         $crear= usuario::where('id',$id)->update($arrayData);
         return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario -> delete();
        return redirect('/usuario');
    }

    /**
     * This method confirms delete
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDelete($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuario.confirmDelete',[
            'usuario' => $usuario
        ]);
    }
}
