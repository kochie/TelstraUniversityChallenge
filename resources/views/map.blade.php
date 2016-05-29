<!-- resources/views/tasks.blade.php -->
@extends('layouts.app')

@section('title', 'Map')

@section('head')
    <link rel="stylesheet" href="{{URL::asset('assets/css/googlemap.css')}}">
@endsection

@section('content')

    <div id="mapWrapper" class="container-fluid" >
        <div id="map"></div>
    </div>

    <script type="text/javascript" src="{{URL::asset('assets/js/googlemap.js')}}"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKGsnCOKnZboS2FMoOY1mooIPGHo4IPTg&callback=initMap">
    </script>


@endsection