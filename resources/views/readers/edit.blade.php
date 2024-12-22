@extends('readers.app')

@section('content')
    <div class="container" style="max-width: 70%">
        <h1>Reader Edit</h1>
        <form action="{{ route('readers.update', $reader->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label>Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$reader->name}}" required>
            </div>
            <div class="form-group mt-3">
                <label>Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$reader->dob}}" required>
            </div>
            <div class="form-group mt-3">
                <label>Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$reader->address}}" required>
            </div>
            <div class="form-group mt-3">
                <label>Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$reader->phone_number}}" required>
            </div>
            <button type="submit" class="btn btn-outline-warning mt-3 px-4">Save</button>
        </form>
    </div>
@endsection
