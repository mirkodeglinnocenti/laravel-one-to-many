@extends('layouts.app')
@section('content')


<div class="container py-5">

    <h1 class="mb-5">
        Aggiungi nuovo progetto
    </h1>

    <form class="row g-3" action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="col-md-6">
          <label for="title" class="form-label">titolo:</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? "" }}">
        </div>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="col-md-12">
            <label for="description" class="form-label">descrizione:</label>
            <textarea class="form-control" id="description" name="description" value="">{{ old('description') ?? "" }}</textarea>
        </div>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="col-md-6">
            <label for="url" class="form-label">url:</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') ?? "" }}">
        </div>
        @error('url')
            <div class="text-danger">{{ $message }}</div>
        @enderror


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Aggiungi progetto</button>
        </div>
    </form>

</div>


@endsection


