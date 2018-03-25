@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">

                    @foreach($data as $returnEvents)
                        <div class="panel panel-body">
                            <div class="name">Name: <span class="text"> {{$returnEvents['name']}}</span></div>
                            <div class="subsctibe"> Subsctibe: <span class="text"> {{$returnEvents['subscribe']}}</span> </div>
                            <div class="date">Date: <span class="text">{{$returnEvents['date']}}</span> </div>
                            <br>
                            <a class="btn btn-primary icon fa-ambulance"  href="{{route('interest-check',['id'=> $returnEvents['id']])}}"> Interested in</a>
                            <a  class=" btn btn-danger icon fa-remove " href="{{ route('will-check', ['id' => $returnEvents['id']]) }}">Will be</a>

                        </div> <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
