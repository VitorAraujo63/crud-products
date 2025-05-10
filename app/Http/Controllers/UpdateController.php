<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateController extends Controller
{
    public function update(Request $request, $id){
        $produto = Product::findOrFail($id);
        $produto->update($request->all());
        return $produto;
    }
}
