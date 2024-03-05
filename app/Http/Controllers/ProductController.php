<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\DeleteRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin/product/index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin/product/create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $image = $data['image'];

        $categories = $data['categories'] ?? [];
        unset($data['categories'], $data['image']);

        $product = Product::create($data);

        if (!empty($image)) {
            $image = $image->storeAs('/images/' . $product->id, $image->getClientOriginalName(), 'public');
            $product->updateQuietly(['image' => $image]);
        }


        $product->categories()->attach($categories);

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        $categories = Category::all();
        return view('admin/product/show', compact('product', 'categories'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        if (!empty($data['image']))
            $data['image'] = $data['image']->storeAs('/images/' . $product->id, $data['image']->getClientOriginalName(), 'public');

        $categories = $data['categories'] ?? [];
        unset($data['categories']);

        $product->update($data);

        $product->categories()->sync($categories);

        return redirect()->route('product.index');
    }

    public function delete(DeleteRequest $request)
    {
        $data = $request->validated();

        foreach ($data['selected'] as $id) {
            $product = Product::findOrFail($id);
            $product->delete();
        }
        return redirect()->route('product.index');
    }
}
