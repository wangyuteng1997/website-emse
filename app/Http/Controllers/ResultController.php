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
}
