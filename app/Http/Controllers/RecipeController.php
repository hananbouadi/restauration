<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response ;

class RecipeController extends Controller
{
    public function getRecipes()
    {
        $recipes = Recipe::all();
        
        // Dump the data to inspect JSON formatting
        dd($recipes);
    
        // Return the recipes as JSON response
        return Response::json($recipes);
    }


    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $recipes = Recipe::all();
        return response()->json($recipes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'price' => 'required|numeric|min:0',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = '/public/uploads';
            $file->move($path,$filename);
        }

        $recipe = Recipe::create($request->all());
        return response()->json($recipe, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->update($request->all());
        return response()->json($recipe, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Recipe::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
