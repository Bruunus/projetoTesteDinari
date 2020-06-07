<?php

namespace App\Http\Controllers;

use App\Vendas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class vendaController extends Controller
{
    public function index()
    {
        $venda = CadastroUsuario::all();
        return response()->json($venda);
    }


    public function show($idVenda)
    {
        $venda = Company::find($idVenda);

        if(!$venda){
            return response()->json([
                'message'   =>  'Record not Found',
            ], 404);
        }
        return response()->json($venda);
    }

    public function store(Request $request)
    {
        $venda = new Company();
		$venda->fill($request->all());
		$venda->save();

		return response()->json($venda, 201);	
    }


    //update
    public function update(Request $request, $idVenda)
    {
        $venda = Company::find($idVenda);

        if(!$venda){
            return response()->json([
                'message'       =>  'Record not found',
            ], 404);
        }

        $venda->fill($request->all());
        $venda->save();

        return response()->json($CadUsuario);
    }

    //delete
    public function destroy($idVenda)
    {
        $venda = Company::find($idVenda);

        if(!$venda){
            return response()->jsob([
                'message'   =>  'Record not found',
            ], 404);
        }

        $venda->delete();
    }
}
