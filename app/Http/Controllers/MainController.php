<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Http\Request;



class MainController extends Controller
{
    public function index(Request $request){
       $products = Product::all();
       return view('general.home',compact('products'));

}

public function about_us(){
   return view('general.about');
}



public function home_ru(){
   return view('ru.home_ru');
}
public function about_ru(){
   return view('ru.about_ru');
}

// public function admin_ru(){
//    return view('ru.admin_ru');
// }






public function allData(){
  $contact = new Product;

  return view('general.admin',['data'=>$contact->all()]);


}



public function add(Request $request){

   $review = new Product();
   $review->name=$request->input('name');
   $review->email=$request->input('email');
   $review->phone=$request->input('phone');
   $review->message=$request->input('message');
   $review->save();

       return redirect('/home')->with('succes', 'Your application has been sent');


}


public function delete_product($id)
{
$product = Product::find($id)->delete();
       return redirect('/admin');
}


    }
