@extends('readers.app')

@section('content')
    <div class="container" style="max-width: 70%">
        <h1>Reader New</h1>
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label>Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mt-3">
                <label>Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group mt-3">
                <label>Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group mt-3">
                <label>Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3 px-4">Save</button>
        </form>
    </div>
@endsection
