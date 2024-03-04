<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\DeleteRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin/category/index', compact('categories'));
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Category::firstOrCreate($data);
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('admin/category/show', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return redirect()->route('category.index');
    }

    public function delete(DeleteRequest $request)
    {
        $data = $request->validated();

        foreach ($data['selected'] as $id) {
            $category = Category::findOrFail($id);
            $category->delete();
        }
        return redirect()->route('category.index');
    }
}
