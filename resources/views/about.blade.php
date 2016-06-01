@extends('layouts.app')

@section('title', 'About')

@section('head')


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <img class="img-responsive img-circle" src="{{URL::asset('assets/images/robert-koch.jpg')}}">
            <div>
                <p>
                    <span>
                        Robert Koch
                    </span>
                </p>
            </div>
        </div>
    </div>
@endsection
