@extends('readers.app')

@section('content')
    <div class="container" style="max-width:70%">
        <h1>Reader information</h1>
        <p class="m-4"><strong>Name:</strong> {{ $reader->name}}</p>
        <p class="m-4"><strong>Date of Birth:</strong> {{ $reader->dob}}</p>
        <p class="m-4"><strong>Address:</strong> {{ $reader->address}}</p>
        <p class="m-4"><strong>Phone Number:</strong> {{ $reader->phone_number}}</p>
        <a href="{{ route('readers.index') }}" class="btn btn-outline-secondary mt-3 px-4">Back</a>
    </div>
@endsection
