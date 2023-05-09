<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class ProductController extends Controller
{
    public function index()
    {
        /*$products = Products::all();
        return view('site.shop', ['products' =>$products]);*/
        $products = Products::latest()->paginate(5);
        return view('index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif,svg|max:2048',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension() ;
            $image->move($destinationPath, $profileImage);
            $input['image']="$profileImage";
        }

        Products::create($input);

        return redirect() ->route('index')
            ->with('success','product created successfully');
    }

    public function show(Product $products)
    {
        return view('products.show', compact('products'));
    }

    public function edit(Product $products)
    {
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, Product $products)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $products->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $products)
    {
        $products->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
