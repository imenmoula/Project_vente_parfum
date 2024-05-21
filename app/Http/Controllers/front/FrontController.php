<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parfum;
use App\Models\Category;
use App\Models\Promotion;

class FrontController extends Controller
{
    public function index(Request $request)
    { 
   
 
        return view('front.home');
        
    }
    

    public function view($id)
    {
      $categories= Category::with('parfum')->get();
       $parfum=Parfum::with('category')->find($id);
       $promotions = Promotion::with('parfum.category')->get();
  
  
      return view('front.includes.parfum',compact('parfum','categories','promotions'));
    }
   
    public function detailParfums($id)
    {
        $parfum=Parfum::find($id);
       
        return view('front.includes.parfumDetails',compact('parfum')); 
    }
 
    

}
