<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.products.products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('type', 'supplier')->get();
        return view('pages.products.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'supplier' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'reorderQuantity' => 'required|integer'
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->supplier = $request->input('supplier');
        $product->description = $request->input('description');
        $product->quantity = 0;
        $product->price = $request->input('price');
        $product->reorderQuantity = $request->input('reorderQuantity');
        $product->save();

        return redirect('/products')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('type', 'supplier')->get();
        $product = Product::find($id);
        return view('pages.products.edit')->with(
            array(
                'product' => $product,
                'users' => $users
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'supplier' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'reorderQuantity' => 'required|integer'
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->supplier = $request->input('supplier');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->reorderQuantity = $request->input('reorderQuantity');
        $product->save();

        return redirect('/products')->with('success', 'Product edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Product deleted successfully');
    }
}
