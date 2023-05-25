<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;



class AdminController extends Controller
{
    //
    public function user(){
        $data = User::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }




    public function foodmenu(Request $request){
        $data = food::paginate(10);
        return view("admin.foodmenu",compact("data"));

     
    }



    
    




    public function deletemenu($id){
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }



    public function updatemenu($id){
        $data = food::find($id);
        return view("admin.updatemenu",compact("data"));
    }

    public function update(Request $request,$id){
        $data = food::find($id);
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;


        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }





    public function upload(Request $request){
        $data = new food;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;


        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();

    }



    public function reservation(Request $request){
        $data = new reservation;


        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
       

        $data->save();
        return redirect()->back();

    }
    public function viewreservation(){
        if(Auth::id()){
            $data = reservation::all();
        return view('admin.adminreservation', compact("data"));
    }else
    return redirect('login');

    }


    public function orders(){

        $data = order::all();
        return view('admin.orders',compact('data'));

    }

    public function deleteorder($id)
    {
        // Logic to delete the order with the provided ID
    
        // Example logic:
        $order = Order::find($id);
        if ($order) {
            $order->delete();
            // Additional logic after successful deletion
        }
        return redirect()->back();
    
        // Redirect or return a response as needed
    }
    

    public function search(Request $request){

        $search = $request->search;
        $data = order::where('name','like','%'.$search.'%')->orWhere('foodname','like','%'.$search.'%')->get();
        return view('admin.orders',compact('data'));
     }
}
