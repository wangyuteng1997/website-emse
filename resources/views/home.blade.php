@extends('layouts.app')

@section('content')
<style>
    .badge-download {
        background-color: transparent !important;
        color: #464443 !important;
    }
    .list-group-item-text{
      font-size: 12px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default" style="border-top: 0px;">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="page-panel-title">@lang('Dashboard')</div>
  <!--                       <div class="col-sm-2">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">@lang('Students') - <b>{{$totalStudents}}</b></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">@lang('Teachers') - <b>{{$totalTeachers}}</b></div>
                            </div>
                        </div> -->
<!--                         <div class="col-sm-4">
                            <div class="card text-white bg-dark mb-3">
                                <div class="card-header">@lang('Types of Books In Library') - <b>{{$totalBooks}}</b></div>
                            </div>
                        </div> -->
<!--                         <div class="col-sm-2">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-header">@lang('Classes') - <b>{{$totalClasses}}</b></div>
                            </div>
                        </div> -->
<!--                         <div class="col-sm-2">
                            <div class="card text-white bg-info mb-3">
                                <div class="card-header">@lang('Sections') - <b>{{$totalSections}}</b></div>
                            </div>
                        </div> -->
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel panel-default" style="background-color: rgba(242,245,245,0.8);">
                                <div class="panel-body">
                                    <h3>@lang('Welcome to') {{Auth::user()->school->name}}</h3>
                                    @lang('Msc in EMSE')
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('List of Msc in EMSE')</div>
                                <div class="panel-body">
                                    
                                    <table class="table">
                                        <tr>
                                            <th>@lang('Msc Name')</th>

                                        
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-chimie-science-materiaux-mse/">•   Master Chimie et Science des Matériaux (MSE)</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/cyber-physical-social-systems-cps2/">•    Master Cyber‐Physical Social Systems (CPS2)</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-donnees-systemes-connectes-dsc/">
                                            •   Master Données et Systèmes Connectés (DSC)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/genie-des-procedes-et-efficacite-energetique-industrielle-pei2e/">
                                            •   Master Génie des Procédés et Efficacité Énergétique Industrielle (PEI2E)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-geospheres/">
                                           •    Master GEOgraphies – eSPaces – Homme/Environnement – Ressources (GEOSPHERES)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-hybrid-electronics/">
                                            •    Master Hybrid Electronics (HYBELEC)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-ingenierie-de-la-sante-bmed/">
                                            •   Master Ingénierie de la Santé (BMED)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-mathematical-imaging-and-spatial-pattern-analysis-mispa/">
                                            •   Master Mathematical Imaging and Spatial Pattern Analysis (MISPA)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-maths-action-mea/">
                                            •   Master Maths en Action (MAEA)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-mecanique-des-materiaux-et-des-procedes-mmp/">
                                            •   Master Mécanique des Matériaux et des Procédés (MMP)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-tribologie-et-ingenierie-des-surfaces-tse/">
                                            •   Master Tribologie et Ingénierie des Surfaces (TSE)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-sciences-de-l-environnement-industriel-et-urbain-seiu/">
                                            •   Master Sciences de l’Environnement Industriel et Urbain (SEIU)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-methodes-avancees-de-genie-industriel-ieor/">
                                            •   Master Méthodes Avancées de Génie Industriel (IEOR)
                                        </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.mines-stetienne.fr/formation/master-prospective-design-prode/">
                                            •   Master Prospective Design (PRODE)
                                        </a></td>
                                        </tr>

                                        
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Notices')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($notices) > 0)
                                    <div class="list-group">
                                        @foreach($notices as $notice)
                                        <a href="{{url($notice->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$notice->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$notice->created_at->format('M d Y h:i:sa')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('No New Notice')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Events')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($events) > 0)
                                    <div class="list-group">
                                        @foreach($events as $event)
                                        <a href="{{url($event->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$event->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$event->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('No New Event')
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Routines')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($routines) > 0)
                                    <div class="list-group">
                                        @foreach($routines as $routine)
                                        <a href="{{url($routine->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$routine->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$routine->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('No New Routine')
                                    @endif
                                </div>
                            </div>
                        </div> -->
<!--                         <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Syllabus')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($syllabuses) > 0)
                                    <div class="list-group">
                                        @foreach($syllabuses as $syllabus)
                                        <a href="{{url($syllabus->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$syllabus->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$syllabus->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('No New Syllabus')
                                    @endif
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
