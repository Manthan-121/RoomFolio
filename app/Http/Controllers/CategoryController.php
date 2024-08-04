<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategorie()
    {
        $categories = DB::table('tbl_categories')->get();
        return view('categorie', compact('categories'));
    }

    public function storeCategorie(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_description' => 'nullable|string',
        ]);

        DB::table('tbl_categories')->insert([
            'cat_name' => $request->cat_name,
            'cat_description' => $request->cat_description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('Categorie')->with('success', 'Category created successfully.');
    }

    public function editCategorie($id = null)
    {
        if ($id == null) {
            return redirect()->route('Categorie');
        } else {
            $category = DB::table('tbl_categories')->where('cat_id', $id)->first();
            $categories = DB::table('tbl_categories')->get();
            return view('categorie', compact('category', 'categories'));
        }
    }

    public function updateCategorie(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_description' => 'nullable|string',
        ]);

        DB::table('tbl_categories')->where('cat_id', $id)->update([
            'cat_name' => $request->cat_name,
            'cat_description' => $request->cat_description,
            'updated_at' => now(),
        ]);

        return redirect()->route('Categorie')->with('edt-success', 'Category updated successfully.');
    }

    public function deleteCategorie($id)
    {
        DB::table('tbl_categories')->where('cat_id', $id)->delete();
        return redirect()->route('Categorie')->with('del-success', 'Category deleted successfully.');
    }
}
