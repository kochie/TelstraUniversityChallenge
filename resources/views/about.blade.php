@extends('layouts.app')

@section('title', 'About')

@section('head')
    <link rel="stylesheet" href="{{URL::asset('assets/css/about.css')}}">


@endsection

@section('content')
    <div class="container">
        <div id="our-committee" class="page-element">

            <h3  style="text-align: center"><span>The Bin Monsters Team</span></h3>
            <hr>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-2 col-xs-6 ">
                    <img class="img-circle" src="{{URL::asset('assets/images/robert-koch.jpg')}}">
                    <p class="name">Robert Koch</p>
                    <p class="role">Computer Science and Electrical Engineering</p>
                </div>
                <div class="col-md-2 col-xs-6">
                    <img class="img-circle" src="{{URL::asset('assets/images/nicky-sevior.jpg')}}">
                    <p class="name">Nicky Sevior</p>
                    <p class="role"></p>
                </div>
                <div class="col-md-2 col-xs-6">
                    <img class="img-circle" src="{{URL::asset('assets/images/jono-rutherfurd.jpg')}}">
                    <p class="name">Jono Rutherfurd</p>
                    <p class="role"></p>
                </div>

                <div class="col-md-2 col-xs-6 offset1">
                    <img class="img-circle" src="{{URL::asset('assets/images/wong-wai-mun.jpg')}}">
                    <p class="name">Wong Wai Mun</p>
                    <p class="role"></p>
                </div>
                <div class="col-md-2 col-xs-6">
                    <img class="img-circle" src="{{URL::asset('assets/images/chris-looyen.jpg')}}">
                    <p class="name">Chris Looyen</p>
                    <p class="role"></p>
                </div>
                <div class="col-md-2 col-xs-6">
                    <img class="img-circle" src="{{URL::asset('assets/images/shivani-amin.jpg')}}">
                    <p class="name">Shivani Amin</p>
                    <p class="role"></p>
                </div>
            </div>
        </div>
    </div>


@endsection
