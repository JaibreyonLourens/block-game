@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <h1>Welcome to Block game</h1>
                            <h2>What is block game?</h2>
                            <p> Block game is a game where you place blocks on a board
                               <br> and once you've filled a whole line you
                                <br>clear the board try tp get as much of an high score as you want</p>


                            <a href="{{route('game.index')}}" class=" btn btn-primary btn-large">Play now!</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
@endsection
