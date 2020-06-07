<?php

namespace App\Http\Controllers;

use App\CadastroDeProduto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        $CadProduto = CadastroDeProduto::all();
        return response()->json($CadProduto);
    }


    public function show($idProduto)
    {
        $CadProduto = Company::find($idProduto);

        if(!$CadProduto){
            return response()->json([
                'message'   =>  'Record not Found',
            ], 404);
        }
        return response()->json($CadProduto);
    }

    public function store(Request $request)
    {
        $CadProduto = new Company();
		$CadProduto->fill($request->all());
		$CadProduto->save();

		return response()->json($CadProduto, 201);	
    }


    //update
    public function update(Request $request, $idProduto)
    {
        $CadProduto = Company::find($CadProduto);

        if(!$CadProduto){
            return response()->json([
                'message'       =>  'Record not found',
            ], 404);
        }

        $CadProduto->fill($request->all());
        $CadProduto->save();

        return response()->json($CadProduto);
    }

    //delete
    public function destroy($idProduto)
    {
        $CadProduto = Company::find($idProduto);

        if(!$CadProduto){
            return response()->jsob([
                'message'   =>  'Record not found',
            ], 404);
        }

        $CadProduto->delete();
    }
}
