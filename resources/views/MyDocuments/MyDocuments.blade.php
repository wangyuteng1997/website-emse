@extends('layouts.app')
@section('title', __('MyDocuments'))
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">

            <h2>@lang('Personnal information')</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                  <form  method="post" action="{{ url('user/submit') }}" enctype="multipart/form-data">
                  	{{ csrf_field() }}
                     •	Last Name: 
                    <input type="text" name="LastName" />
                     <br>
                     <br>
                     •	First Name: 
                    <input type="text" name="FirstName" />
                     <br>
                     <br>
                     •	Campus France/ Studying in France ID *: 
                    <input type="text" name="FranceID" />
                     <br>
                     <br>
                    <label class="radio-inline">
                     <input type="radio" name="sex" value="Male"> Male
                    </label>
                    <label class="radio-inline">
                     <input type="radio" name="sex" value="Female"> Female 
                    </label>
                     <br>
                     <br>
                     •	Date of birth: 
                    <input type="date" name="birthday" />                  
                     <br>
                     <br>
                     •	Place & Country of birth: 
                    <input type="text" name="Countryofbirth" />
                     <br>
                     <br>
                     •	 Nationality : 
                    <input type="text" name="Nationality" />
                     <br>
                     <br>
                     •	 Home address (*) : 
                    <input type="text" name="Homeaddress" />
                     <br>
                     <br>
                     •	 Phone number (*) : 
                    <input type="text" name="Phonenumber" />
                     <br>
                     <br>
                    <label for="email">•	Email (*)</label>
                     <input type="email" name="email" >
                     <br>
                     
                     
                     <input type="text" name="submit_time" id="lytime" value="" style=" display:none"> 
                     <script type="text/javascript"> 
                      window.onload = function(){ 
                      var nowDate = new Date(); 
                       var str = nowDate.getFullYear()+"-"+(nowDate.getMonth() + 1)+"-"+nowDate.getDate()+":"+(nowDate.getHours()+":"+nowDate.getMinutes()); 
                       document.getElementById("lytime").value=str; }
                     </script>
                     <!-- <input type="hidden" name="_token" value="{{csrf_token()}}" /> -->
                     <br>
                     msc that you want to apply:
                     <br>
                    <div class="col-md-8">
                     <input name="msc[]" type="checkbox" value="MSE " >MSE 
                     <input name="msc[]" type="checkbox" value="CPS2" >CPS2 
                     <input name="msc[]" type="checkbox" value="DSC" >DSC 
                     <input name="msc[]" type="checkbox" value="PEI2E" >PEI2E 
                     <br>
                     <input name="msc[]" type="checkbox" value="GEOSPHERES" >GEOSPHERES 
                     <input name="msc[]" type="checkbox" value="HYBELEC" >HYBELEC 
                     <input name="msc[]" type="checkbox" value="BMED" >BMED 
                     <input name="msc[]" type="checkbox" value="MISPA" >MISPA 
                     <br>
                     <input name="msc[]" type="checkbox" value="MAEA" >MAEA 
                     <input name="msc[]" type="checkbox" value="MMP" >MMP 
                     <input name="msc[]" type="checkbox" value="TSE" >TSE 
                     <input name="msc[]" type="checkbox" value="SEIU" >SEIU 
                     <br>
                     <input name="msc[]" type="checkbox" value="IEOR" >IEOR 
                     <input name="msc[]" type="checkbox" value="PRODE" >PRODE 
                    </div>
                     <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=1)" width="100%" color=#987cb9 SIZE=3>
                     
                     <h3>
                         Identity photo:
                         </h3>
                    <input type="file" name="photo" id="">
                          <br>
                          <h3>
                         Letter of application:
                         </h3>
                    <input type="file" name="Letter" id="">
                          <br>
                       
                          <p>
                     <input type="submit" value="submit">
                         </p>

                  

                  </form> 
<!--                         <div class="alert alert-success">
    
                        </div> -->
    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

