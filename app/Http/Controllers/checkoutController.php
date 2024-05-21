<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreCheckoutRequest;
use Illuminate\Http\Request;
use App\Models\Parfum;
use App\Models\order;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Log;

class checkoutController extends Controller
{
 
   


    public function checkout()
    {
     
        return view('front.includes.checkout');
    }


    public function store(Request $request)
    {

        try{

           // $data = $request->validated();
        $guestSession = session('guest_session');

       $cart = \Cart::session($guestSession)->getContent(); 

       if($cart->count() == 0){
          return redirect()->back()->with('error', 'Votre Panier est vide ');
       }
//validation 
$request->validate([
    'fname' => 'required|string|max:255',
    'lname' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'phone' => 'required|string|max:20',
    'address' => 'required|string|max:255',
    'rue' => 'required|string|max:255',
    'message' => 'nullable|string',
]);
////////////////
       $order = order::create([
           'fname' => $request->fname,
           'lname' => $request->lname,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'rue' => $request->rue,
           'message' => $request->message,
           'netpaye' => \Cart::session($guestSession)->getTotal(),
       ]);

       if ($order)
       {
            foreach ( $cart as $item) {
                $order->orderLine()->create([
                    'parfum_id' => $item->id,
                    'qty' => $item->quantity,
                    'prixunitaire'=> $item->price,
                    'total' => $item->price * $item->quantity,
                ]);
            }
           \Cart::session($guestSession)->clear();
           return redirect()->back()->with('success', 'votre commande est bien enregistre avec succes');
       }

    }catch(\Exception $e) {
        Log::error('erreur passage  . ' . $e->getMessage());
        return redirect()->back()->with('error', 'erreur de passagecommande ' );
    }

    }
}
