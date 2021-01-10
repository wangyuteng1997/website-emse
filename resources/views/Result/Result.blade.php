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

               <h2>@lang('Result of Candidature')</h2>
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form  method="post" action="{{ url('user/submit/Operation') }}" >
                          @csrf
                          imput your email address to search results
                           <input type="email" name="email" />
                           <input type="submit" value="submit">
                          </form>


                    <table border="1" width="300"> 
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Status</th>
                        </tr>>                   
                      </thead>
                      <tbody>
                        <tr>
                         <th >1</th>
                         <td>1</td>
                         <td>1</td>
                         <td>1</td>

                        </tr>

                      </tbody>
                    </table>


                      
                  </div>
               </div>
          </div>
    </div>
</div>
@endsection