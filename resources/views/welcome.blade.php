@extends('layout.index')
@section('main')
    <section>
        <div class="container mt-5">
            @foreach ($users as $user)
                <h1>{{ $user->nickname }}</h1>
                <h2>{{ $user->mail }}</h2>
                <ul>
                    <li>{{ $user->profiles->name}} </li>
                    <li>{{ $user->profiles->age}}</li>
                    <li>{{ $user->profiles->phone}}</li>
                </ul>
            @endforeach
        </div>
    </section>
@endsection
