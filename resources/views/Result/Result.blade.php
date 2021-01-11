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
                     <form  method="post" action="{{ url('search/result') }}" >
                          @csrf
                          imput your email address to search results
                          <br>
                           <input type="email" name="email" />
                           <input type="submit" value="submit">
                          </form>


                    

                      
                  </div>
               </div>
          </div>
    </div>
</div>
@endsection