<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productscontroller extends Controller
{
   public function  index() {

$products=['flav1'=>'mango' , 'flav2'=> 'strawbary' ,'flav3'=>'choco'];




     return view('product',compact('products'));

   }
}
