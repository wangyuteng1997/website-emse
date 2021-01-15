<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\models\Submit;
class MyDocumentController extends Controller
{
    //
    public function index(Request $request){
     if($request->isMethod('POST'))
       {
           if ($request->file('photo')->isValid() && $request->file('Letter')->isValid() ) {

            $path_photo = md5(rand(10,100)). '.' . $request ->file('photo') -> getClientOriginalExtension();
            $path_Letter = md5(rand(10,100)). '.' . $request ->file('Letter') -> getClientOriginalExtension();

	        $request ->file('photo') -> move('./uploads',$path_photo);
	        $request ->file('Letter') -> move('./uploads',$path_Letter);
          $msc = $request->input('msc');

       	  $model = new Submit;
       	  $data = $request -> all();
       	  $data['photo'] = './uploads/' . $path_photo;
       	  $data['Letter'] = './uploads/' . $path_Letter;
       	  


          $string = '';
          foreach($msc as $msc){
          $string .= $msc . ',';
           }
          $data['msc'] = $string;
          $result = $model ->create($data);
          
       	  // $data = $request->input('Student');
          // var_dump($data);
          echo ("<script>alert('Submitted successfully！');location='MyDocuments.MyDocuments'</script>");
        }
            
         }else{

    	$view = 'MyDocuments.MyDocuments';
    	return view($view);
        }


  
    }

}
