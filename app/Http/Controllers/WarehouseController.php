<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class WarehouseController extends Controller
{
    public function orders()
    {
        $orders = Order::all();
        return view('warehouse.orders')->with('orders', $orders);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        // update satus in order table
        $order->status = 'processed';
        $order->save();

        // increment quantity in products table
        $products = Product::where('name', $order->product)->get();
        foreach ($products as $product) {
            $newQuantity = $product->quantity + 50;
            $product_id = $product->id;
        }
        $product = Product::find($product_id);
        $product->quantity = $newQuantity;
        $product->save();

        return back()->with('success', 'Order dispatched successfully');
    }

    public function decrementQuantity(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product->quantity <= 0) {
            return back()->with('success', "Quantity can't be decremented further");
        } else {
            $reOrderQuantity = $product->reorderQuantity;
            $newQuantity = $product->quantity - 1;
        }

        // condition for auto reorder
        if ($reOrderQuantity == $newQuantity) {
            $this->validate($request, [
                'product' => 'required',
                'supplier' => 'required|email'
            ]);
    
            $order = new Order;
            $order->product = $request->input('product');
            $order->quantity = 50;
            $order->supplier = $request->input('supplier');
            $order->status = 'unprocessed';
            $order->save();

            $product->quantity = $newQuantity;
            $product->save();

            return back()->with('success', 'Quantity decremented by 1 and an order made');
        }

        $product->quantity = $newQuantity;
        $product->save();
        
        return back()->with('success', 'Quantity decremented by 1');
    }
}
