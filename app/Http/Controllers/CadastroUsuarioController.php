<?php

namespace App\Http\Controllers;

use App\CadastroDeUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroUsuarioController extends Controller
{
    public function index()
    {
        $CadUsuario = CadastroUsuario::all();
        return response()->json($CadUsuario);
    }


    public function show($idCUsuario)
    {
        $CadUsuario = Company::find($idCUsuario);

        if(!$CadUsuario){
            return response()->json([
                'message'   =>  'Record not Found',
            ], 404);
        }
        return response()->json($CadUsuario);
    }

    public function store(Request $request)
    {
        $CadUsuario = new Company();
		$CadUsuario->fill($request->all());
		$CadUsuario->save();

		return response()->json($CadUsuario, 201);	
    }


    //update
    public function update(Request $request, $idCUsuario)
    {
        $CadUsuario = Company::find($idCUsuario);

        if(!$CadUsuario){
            return response()->json([
                'message'       =>  'Record not found',
            ], 404);
        }

        $CadUsuario->fill($request->all());
        $CadUsuario->save();

        return response()->json($CadUsuario);
    }

    //delete
    public function destroy($idCUsuario)
    {
        $CadUsuario = Company::find($idCUsuario);

        if(!$CadUsuario){
            return response()->jsob([
                'message'   =>  'Record not found',
            ], 404);
        }

        $CadUsuario->delete();
    }
}
