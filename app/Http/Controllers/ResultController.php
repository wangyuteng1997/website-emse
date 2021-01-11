<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\models\Submit;
class ResultController extends Controller
{
    //
    public function index(Request $request){

    	if($request->isMethod('POST'))
       {

       }else{
        $view = 'Result.Result';
    	return view($view);

       }
   }

    public function Result(Request $request){
    	$email = $request -> input('email');
    	$opera = Submit::where("email",'=',$email) -> get();
      // dd($opera);
      foreach ($opera as $key =>$value) { 
        echo 'the Result of your Msc is  ' . $value ->operation ;
      }
    	$view = 'Result.Result2';
    	return view($view) -> with('opera',$opera);
    }

        
}
