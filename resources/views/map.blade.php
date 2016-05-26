<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{URL::asset('assets/css/googlemap.css')}}">

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')



    </div>
    <div class="container" style="height: 100vh">
        <div id="map" style="height: 100vh"></div>
    </div>

    <!-- TODO: Current Tasks -->

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKGsnCOKnZboS2FMoOY1mooIPGHo4IPTg&callback=initMap">
    </script>
    <script type="text/javascript" src="{{URL::asset('assets/js/googlemap.js')}}"></script>

@endsection