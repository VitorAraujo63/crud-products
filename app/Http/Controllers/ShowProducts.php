<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShowProducts extends Controller
{
    public function show(){

        return Product::all();
    }

    public function show_id($id){

        $produto = Product::findOrFail($id);

        if (!$produto) return response()->json(['error' => 'Produto não encontrado'], 404);

        return response()->json($produto);
    }
}
