@extends('layouts.app')

@section('title', 'Contact')

@section('head')
    <link href="{{URL::asset('assets/css/contact.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid" style="padding: 0">
        <div id="cover" class="jumbotron">
            <h1><span>Contact</span></h1>
        </div>
    </div>
    <div class="container" style="padding-top: 10%">
        <div class="row">
            <div class=col-lg-6>
                Hello, Feel free to send an email to <a href="mailto:rkkochie@gmail.com">rkkochie@gmail.com</a>
            </div>
        </div>
    </div>
@endsection