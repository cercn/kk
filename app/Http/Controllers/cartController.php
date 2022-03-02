<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function cart(){
        $cart = session()->get('cart');

        dd($cart);

        return view('panier.cart');
    }

    public function addToCart($id){
        $product = Product::find($id);

        $cart = session()->get('cart');

            if(isset($cart[$id])){
                $cart[$id]['quantity'] ++ ;
            }
            else{
                $cart = [
                        'id' => $product->id,
                        'name' => $product->nom,
                        'image' => '',
                        'quantity' => 1,
                        'prix' => $product->prix
                    
                ];


            }
            session()->push('cart', $cart);








       return response()->json(
          session('cart'), 200);

    }

    public function updateToCart(Request $request ){

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);
            session()->flash('success','cart updated successfully');
        }

    }

    public function deleteToCart(Request $request){
            if($request->id){
                session()->get('cart');
                if(isset($cart[$request->id])){
                    unset($cart[$request->id]);
                    session()->put('cart',$cart);
                }
                session()->flash('success','cart delete successfully');

            }
    }
}
