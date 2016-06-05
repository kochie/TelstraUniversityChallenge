@extends('layouts.app')

@section('title', 'List')

@section('head')

@endsection

@section('content')
    <div class="container">


<h1>bin data list</h1>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Bin Id</th>
            <th>Team</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Time</th>
            <th>Bin Capacity</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($bins as $bin)
                <tr>
                    <th scope="row">{{$bin['id']}}</th>
                    <td> {{$bin['bin_id']}}</td>
                    <td> {{$bin['team']}}</td>
                    <td> {{$bin['lat']}}</td>
                    <td> {{$bin['lng']}}</td>
                    <td> {{$bin['time']}}</td>
                    <td> {{$bin['binCapacity']}}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
    </div>





@endsection