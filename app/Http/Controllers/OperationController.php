<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\models\Submit;
class OperationController extends Controller
{
    //
     public function index(Request $request){

     	$operation = $request -> input('Operation');
     	$id = $request -> input('id');
        echo "Submit successfully！";

     	$data = Submit::find($id);
     	$data -> operation = $operation;
     	$result = $data -> save();
     	 // echo ("<script>alert('Submitted successfully！');location='MyDocuments.MyDocuments'</script>");
     }
}
