<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use App\Cart;
use App\User;
use App\Transaction;
use App\Product;
use App\ProductTransaction;
use Auth;

class CheckoutController extends Controller
{
    //
    public function step1(){

      if(Auth::user()){
          $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
          return view('cms.checkout.step-1', compact('carts'));
        }else{
          return redirect()->route('auth.login');
        }

    }

    public function step1Submit(Request $request){
      $this->validate($request, [
        'address' => 'required',
        'province' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'courier' => 'required',
        'shipping_cost' => 'required',
      ]);
      $carts = Cart::with(['product'])->where('user_id', auth()->user()->id)->get();
      $products = [];
      $transaction = $request->all();
      $transaction['total_price'] = 0;
      foreach($carts as $cart){
        if(!is_null($cart->product)){
          $products[]=[
            'name' => $cart->product->name,
            'quantity' => $cart->quantity,
            'price' => $cart->product->price,
            'total' => $cart->product->price * $cart->quantity,
          ];
          $transaction['total_price'] += $cart->product->price * $cart->quantity;
        }
      }
      $transaction = json_decode(json_encode($transaction), false);

      return view('cms.checkout.step-1', compact('transaction', 'products'));
    }

    public function step2Submit(Request $request){
      $this->validate($request, [
        'address' => 'required',
        'province' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'courier' => 'required',
        'shipping_cost' => 'required',
      ]);

      $transaction = $request->all();
      $transaction = json_decode(json_encode($transaction), false);
      $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
      return view('cms.checkout.step-2', compact('carts', 'transaction'));
    }

    public function step3Submit(Request $request){
      $this->validate($request, [
        'address' => 'required',
        'province' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'courier' => 'required',
        'shipping_cost' => 'required',
        'payment_file' => 'required|file|max:2048|mimes:jpg,jpeg,png,pdf,doc,docx',
      ]);

      if($request->has('payment_file')){
        $directory = 'payment_prove'; //folder name
        $image = $request->file('payment_file');
        if (!File::isDirectory($directory)) {
          File::makeDirectory($directory, 0777, true, true);
        }
        $imageName    = uniqid() . $image->getClientOriginalName();
        Storage::disk('public')->put($directory .'/'. $imageName,  file_get_contents($image));
        $request['payment_prove'] = $directory .'/'. $imageName;
      }

      $transaction =  Transaction::create([
          'address' => $request->address,
          'province' => $request->province,
          'city' => $request->city,
          'postal_code' => $request->postal_code,
          'country' => $request->country,
          'phone' => $request->phone,
          'receipt' => '-',
          'courier' => $request->courier,
          'shipping_cost' => $request->shipping_cost,
          'invoice' => strtotime(now()),
          'user_id' => auth()->user()->id,
          'payment_prove' => $request->payment_prove,
      ]);
      $carts = Cart::with('product')->where('user_id', auth()->user()->id)->get();
      $cartsId = [];
      foreach($carts as $cart){
        $cartsId[$cart->id] = $cart->id;
        if($cart->product->count() > 0){ //if exist
          $stock = $cart->product->stock - $cart->quantity;
          Product::where('id', $cart->product->id)->update([
            'stock' => $stock
          ]);
          ProductTransaction::create([
            'price' => $cart->product->price,
            'quantity' => $cart->quantity,
            'review' => '-',
            'product_id' => $cart->product_id,
            'transaction_id' => $transaction->id,
          ]);
        }
      }
      Cart::whereIn('id', $cartsId)->delete();
      return view('cms.checkout.step-3');
    }

    public function step3(){ //not usable
        if(Auth::user()){
            $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
           return view('cms.checkout.step-3');
         }else{
           return redirect()->route('auth.login');
         }

    }
}
