<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use http\Env\Responset;
use Cart;

class CartController extends Controller
{
    protected $product;
    protected $cartProducts;

    public  function  addToCart(Request $request){

      $this->product = Product::find($request->product_id);
      cart::add([
          'id' =>$this->product->id,
          'name' =>$this->product->name,
          'price' =>$this->product->selling_price,
          'quantity' =>$this->product->qty,
          'attributes' =>[
              'image'=> $this->product->image,
          ]
      ]);
      if(!$request->ajax()){
          return redirect()->back()->with('messages', 'Cart added Successfully');
      }else{
          return json_encode('Cart added Successfully..');
      }
    }

    public  function  viewCart(){
        $this->cartProducts = Cart::getContent();
        return view ('front.cart.view',[
        'cartProducts' => $this->cartProducts]);
    }
}
