@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="score">0</div>


        <canvas id="tetris" width="240" height="400"></canvas>



    </div>

@endsection
@section('myjsfile')
    <script type="application/javascript" src="/js/player.js"></script>
    <script type="application/javascript" src="/js/tetris.js"></script>
@endsection
