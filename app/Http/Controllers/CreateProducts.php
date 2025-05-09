<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CreateProducts extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image_path' => 'nullable|string',
        ]);

        $produto = Product::create($validated);
        return $produto;
    }
}
