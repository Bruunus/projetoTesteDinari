<?php

namespace App\Http\Controllers;

use App\itensDaVenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class itensController extends Controller
{
    public function index()
    {
        $itenVenda = itensDaVenda::all();
        return response()->json($itenVenda);
    }


    public function show($idItenDeVenda)
    {
        $itenVenda = Company::find($idItenDeVenda);

        if(!$itenVenda){
            return response()->json([
                'message'   =>  'Record not Found',
            ], 404);
        }
        return response()->json($itenVenda);
    }

    public function store(Request $request)
    {
        $itenVenda = new Company();
		$itenVenda->fill($request->all());
		$itenVenda->save();

		return response()->json($itenVenda, 201);	
    }


    //update
    public function update(Request $request, $idCUsuario)
    {
        $itenVenda = Company::find($idItenDeVenda);

        if(!$itenVenda){
            return response()->json([
                'message'       =>  'Record not found',
            ], 404);
        }

        $itenVenda->fill($request->all());
        $itenVenda->save();

        return response()->json($itenVenda);
    }

    //delete
    public function destroy($idItenDeVenda)
    {
        $itenVenda = Company::find($idItenDeVenda);

        if(!$itenVenda){
            return response()->jsob([
                'message'   =>  'Record not found',
            ], 404);
        }

        $itenVenda->delete();
    }
}
