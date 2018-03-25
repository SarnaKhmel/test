@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My old events</div>

                    <div class="panel-body">






                        @foreach($data as $returnEvents)
                            <div class="panel panel-body">
                                            <div class="name" type="hiden"> <span class="text"> {{$returnEvents['id']}}</span></div>
                                            <div class="name">Name: <span class="text"> {{$returnEvents['name']}}</span></div>
                                            <div class="subsctibe"> Subsctibe: <span class="text"> {{$returnEvents['subscribe']}}</span> </div>
                                            <div class="date">Date: <span class="text">{{$returnEvents['date']}}</span> </div>
                                            <br>
                                <a class="btn btn-primary icon fa-ambulance"  href="{{route('edit-prod',['id'=> $returnProdInfo['id']])}}"> Interested in</a>
                                <a  class=" btn btn-danger icon fa-remove " href="{{ route('delete-prod', ['id' => $returnProdInfo['id']]) }}">Will be</a>
                            </div> <br>
                        @endforeach






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
