<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB; 




class HomeController extends Controller
{
    public function index(Request $request ){
        $allfood = food::all();


        $data = food::paginate(12);
        if ($request->ajax()) {
            return view('food', compact('data'))->render();
        }


        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();


        return view('home', compact('data','allfood','count'));
       
    }





 



    public function panel(Request $request){
        $data = food::paginate(6);

        if ($request->ajax()) {
            return view('food', compact('data'))->render();
        }

        $usertype = Auth::user()->usertype;
        if($usertype == "1"){
            return view("admin.dashboard");
        }else{

            // $user_id = Auth::id();
            // $count = Cart::where('user_id', $user_id)->count();
            return redirect('/');

        }
    }





    


    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = 1;
    
            // Retrieve the cart record for the user and food item, if it exists.
            $cart = Cart::where('user_id', $user_id)
                ->where('food_id', $food_id)
                ->first();
    
            if($cart){
                // If the cart record exists, update the quantity by adding the new quantity to the existing quantity.
                $cart->quantity += $quantity;
                $cart->save();
            }else{
                // If the cart record does not exist, create a new cart record with the given quantity.
                $cart = new Cart;
                $cart->user_id = $user_id;
                $cart->food_id = $food_id;
                $cart->quantity = $quantity; // Set the quantity to the given quantity
                $cart->save();
            }
    
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }
    
    public function showcart(Request $request, $id){

        if(Auth::id() == $id){
            $count = Cart::where('user_id', $id)->count();
            $data = DB::table('carts')
        ->select('carts.id', 'carts.quantity', 'food.title', 'food.price', 'food.image')
        ->leftJoin('food', 'carts.food_id', '=', 'food.id')
        ->where('carts.user_id', $id)
        ->get();

        

      return view('showcart',compact('count','data'));}else{
        return redirect()->back();
      }

    }




    










    public function remove($id){

        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }



    public function orderconfirm(Request $request){
        foreach($request->foodname as $key => $foodname){
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }
        return redirect()->back();
    }






    public function updateQuantity(Request $request, $id) {
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity;
        $cart->save();
        return response()->json(['quantity' => $cart->quantity]);
    }
    
}