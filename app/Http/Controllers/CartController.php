<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\BookInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('cart.index', [
            'items' => Cart::with(['bookinfo','user'])->where('user_id', '=', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'method create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'book_id' => 'required',
            'value' => 'required',
        ]);
        $book = BookInfo::find($request->book_id);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['value'] = $validatedData['value'];
        $userCart = Cart::where('user_id', '=', Auth::user()->id)->where('book_id', '=', $validatedData['book_id'])->first();
        if($userCart){
            $validatedData['value'] += $userCart->value;
            $validatedData['total_price'] = $validatedData['value'] * $book->price;
            Cart::where('id', '=', $userCart->id)->update($validatedData);
            return back();
        }
        $validatedData['total_price'] = $validatedData['value'] * $book->price;
        Cart::create($validatedData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return view('cart.show', [
            'item' => Cart::find($cart->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {   
        $validatedData = $request->validate([
            'value' => 'required',
        ]);
        $validatedData['total_price'] = $validatedData['value'] * $request['price'];
        Cart::where('id', '=', $cart->id)->update($validatedData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {   
        
        Cart::destroy($cart->id);
        return back();
    }
}
