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

        <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
        <input id="clearButton" class="controls button" type="button" value="Clear Map">
        <input id="uploadButton" class="controls button" type="button" value="Upload Markers">
        <input id="heatmapButton" class="controls button" type="button" value="Toggle Heatmap">
        <select id="teamSelect" class="controls button" title="teamSelect">
            <option value="0">All Teams</option>
            <option value="1">Team 1</option>
            <option value="2">Team 2</option>
            <option value="3">Team 3</option>
            <option value="4">Team 4</option>
        </select>

        <script type="text/javascript">
            var _token = '{{ csrf_token() }}';
        </script>
        <script type="text/javascript" src="{{URL::asset('assets/js/googlemap.js')}}"></script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKGsnCOKnZboS2FMoOY1mooIPGHo4IPTg&callback=initMap&libraries=places,visualization">
        </script>






@endsection