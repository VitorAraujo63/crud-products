<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DeleteProducts extends Controller
{
    public function delete($id) {
        $produto = Product::findOrFail($id);
        $produto->delete();
        return response()->json(['mensagem' => 'Produto deletado com sucesso!']);
    }
}
