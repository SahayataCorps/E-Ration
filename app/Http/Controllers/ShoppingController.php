<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use App\products;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {

    	$pdt = products::find(request()->pdt_id);

    	$cartitem = Cart::add([
             'id' => $pdt->id,
             'name' => $pdt->name,
             'qty' => request()->qty,
             'price' => $pdt->price
    	]);

    	Cart::associate($cartitem->rowId, 'App\products');
        Session::flash('success','Success.');
    	return redirect()->route('cart');
    }

    public function cart()
    {    

    	return view('cart');
    }

    public function cart_delete($id)
    {
    	Cart::remove($id);
    	return redirect()->back();
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty+1);
        return redirect()->back();
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty-1);
        return redirect()->back();
    }

    public function rapid_add($id)
    {
        $pdt = products::find($id);

        $cartitem = Cart::add([
             'id' => $pdt->id,
             'name' => $pdt->name,
             'qty' => 1,
             'price' => $pdt->price
        ]);

        Cart::associate($cartitem->rowId, 'App\products');
        Session::flash('success','Success.');
        return redirect()->route('cart');
    }
}
