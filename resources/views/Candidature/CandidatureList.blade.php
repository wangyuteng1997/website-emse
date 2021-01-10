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

               <h2>@lang('List of Candidature')</h2>
               <div class="panel panel-default">
                  <div class="panel-body">
                    <table border="1" width="2300"> 
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Studying in France ID</th>
                          <th>Sex</th>
                          <th>Date of birth</th>
                          <th>Place & Country of birth</th>
                          <th>Nationality</th>
                          <th>Home address</th>
                          <th>Phone number</th>
                          <th>Email</th>
                          <th>Subimit time</th>
                          <th>Photo</th>
                          <th>Letter</th>
                          <th>Operation</th>
                          <th>Status</th>
                        </tr>>                   
                      </thead>
                      <tbody>
                        @foreach($candidature as $candi)
                        <tr>
                         <th >{{ $candi->id }}</th>
                         <td>{{ $candi->LastName }}</td>
                         <td>{{ $candi->FirstName }}</td>
                         <td>{{ $candi->FranceID }}</td>
                         <td>{{ $candi->sex }}</td>
                         <td>{{ $candi->birthday }}</td>
                         <td>{{ $candi->Countryofbirth }}</td>
                         <td>{{ $candi->Nationality }}</td>
                         <td>{{ $candi->Homeaddress }}</td>
                         <td>{{ $candi->Phonenumber }}</td>
                         <td>{{ $candi->email }}</td>
                         <td>{{ $candi->submit_time }}</td>
                         <td><a href="{{url($candi->photo)}}" download="">Download photo</a>
                         </td>
                         <td><a href="{{url($candi->Letter)}}" download="">Download Letter of application</a>
                         </td> 
                         <td>
                          <form  method="post" action="{{ url('user/submit/Operation') }}" >
                          @csrf
                           <select name="Operation">
                            <option value ="Pass" >Pass</option>
                            <option value ="Fail">Fail</option>
                            <option value="Lack">Lack information</option>
                           </select>
                           <input type="hidden" name="id" value="{{$candi->id}}">
                           <input type="submit" value="submit">
                           
                          </form>
                         </td>
                         <td>{{ $candi->operation }}</td>>
                        </tr>
                        @endforeach 
                      </tbody>
                    </table>


                      
                  </div>
               </div>
          </div>
    </div>
</div>
@endsection