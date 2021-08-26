<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function recipe()
    {
        $dataRecipes = Recipe::get();
        return view('admin.recipe', compact('dataRecipes'));
    }

    public function recipe_form()
    {
        $dataRecipes = [];
        return view('admin.recipe_form', compact('dataRecipes'));
    }

    public function saveRecipe(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataRecipes = $request->all();
        Recipe::updateOrCreate([
            'id' => $dataRecipes['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataRecipes['name'],
            'price' => $dataRecipes['price'],
            'action' => $dataRecipes['action'],
            'priority' => $dataRecipes['priority'],

        ]);
        return back();
    }
    public function edit_recipe($id)
    {
        $dataRecipes = Recipe::where('id', $id)->first();
        return view('admin.recipe_edit', compact('dataRecipes'));
    }

    public function delete_recipe($id)
    {
        Recipe::where('id', $id)->delete();
        return back();
    }
}
