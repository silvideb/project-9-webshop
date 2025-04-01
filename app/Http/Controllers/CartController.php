<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function updateItem(Request $request, $id)
    {
        $cart = session()->get('cart');
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item is verwijderd!');
    }

    public function checkout()
    {
        // Hier kun je de checkout-logica implementeren of een view tonen
        return view('checkout.index'); // Zorg voor een view resources/views/checkout/index.blade.php
    }
}