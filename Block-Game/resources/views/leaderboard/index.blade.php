@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Score</th>
            <th scope="col">Date</th>
            <
        </tr>
        </thead>
        <tbody>

        @foreach($scores as $score)
            <tr>
                <th scope="row">{{$score->id}}</th>
                    <td>
                        <p>{{$score->users->name}}</p>
                    </td>
                    <td>{{$score->score}}</td>
                    <td>{{$score->created_at}}</td>
                    <td>
                    </td>

            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
