@extends('layouts.app')
@section('content')

<div class="container py-5">

    <h1 class="mb-5">
        Progetto: {{ $project['title'] }}
    </h1>

    <div>
        <h6>Descrizione:</h6>
        <p>{{ $project['description'] }}</p>
        <h6>Url:</h6>
        <a href="{{ $project['url'] }}" target=”_blank”>{{ $project['url'] }}</a>
    </div>

</div>

@endsection