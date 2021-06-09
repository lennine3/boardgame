<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class shopController extends Controller
{
    //
    public function index(){
        $products=product::all();
        return view ('index',compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = product::findOrFail($id);

        if (!$product) {
            abort(404);
        }
        $cart = Session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                    ]
                ];
                Session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
            //dd(Session::get('cart'));
                dd($cart);
            /* return redirect()->back(); */
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}

