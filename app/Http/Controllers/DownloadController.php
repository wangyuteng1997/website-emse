<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\models\Submit;
class DownloadController extends Controller
{
    //
     public function downloadphoto(Request $request){

     	$helpfriend = DB::connection('test')->table($candidature)->where('id', $luckyrecordid)->select('helpfriend')->get();
          dd($helpfriend[0]->helpfriend);

     
     }
}
