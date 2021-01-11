<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\models\Submit;
class CandidatureController extends Controller
{
    //
        public function index(Request $request){


        // $candidature = DB::table('candidature')->get();
        
         $candidature = Submit::get();

         
    	$view = 'Candidature.CandidatureList';
    	return view($view,['candidature' => $candidature]);
    }
}
