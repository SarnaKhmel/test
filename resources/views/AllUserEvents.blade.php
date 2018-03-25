@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">You are interested in these events.</div>

                    <div class="panel-body">
                    <br>
                        @foreach($dataIntrest as $returnEvents)
                            <div class="panel panel-body">
                                <div class="name">Name: <span class="text"> {{$returnEvents['email']}}</span></div>
                                <div class="subsctibe"> Subsctibe: <span class="text"> {{$returnEvents['subscribe']}}</span> </div>
                                <div class="date">Date: <span class="text">{{$returnEvents['date']}}</span> </div>
                            </div> <br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">You will be on these events. </div>
                    @foreach($dataWill as $returnEvents)
                        <div class="panel panel-body">
                            <div class="name">Name: <span class="text"> {{$returnEvents['name']}}</span></div>
                            <div class="subsctibe"> Subsctibe: <span class="text"> {{$returnEvents['subscribe']}}</span> </div>
                            <div class="date">Date: <span class="text">{{$returnEvents['date']}}</span> </div>
                        </div> <br>
                    @endforeach
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">You were on these events.</div>

                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
