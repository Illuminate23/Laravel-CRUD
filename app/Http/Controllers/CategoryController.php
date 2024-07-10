<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function all_categories()
    {
        $category  = new Category;
        return view('categories',['data' => $category->orderBy('id', 'desc')->get() ]);
    }

    public function add_category(CategoryRequest $req)
    {
        $category = new Category();
        $category->name = $req->input('new_category');

        $category->save();

        return redirect()->route('categories')->with('success', 'Категория была добавлена');

    }

    public function delete_category($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories')->with('success', 'Категория была удалена');
    }

    public function edit_category($id, CategoryRequest $req)
    {
        $category = Category::find($id);
        $category->name  = $req->input('new_category');

        $category->save();

        return redirect()->route('single_category', $id)->with('success', 'Категория была изменена');
    }

    public function single_category($id)
    {
        $category = new Category;
        return view('single_category', ['data' => $category->find($id)] );
    }

}
