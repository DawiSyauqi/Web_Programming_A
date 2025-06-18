<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); 
    return ProductResource::collection($products); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([ 
            'name' => 'required|string|max:255', 
            'description' => 'required|string', 
            'price' => 'required|numeric|min:0', 
            'stock' => 'required|integer|min:0' 
        ]); 
         
        $product = Product::create($validated); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Product created successfully', 
            'data' => $product 
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return new ProductResource($product); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated = $request->validate([ 
            'name' => 'sometimes|string|max:255', 
            'description' => 'sometimes|string', 
            'price' => 'sometimes|numeric|min:0', 
            'stock' => 'sometimes|integer|min:0' 
        ]); 
         
        $product->update($validated); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Product updated successfully', 
            'data' => $product 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $product->delete(); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Product deleted successfully' 
        ]); 
    }
}
