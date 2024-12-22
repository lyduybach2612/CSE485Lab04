@extends('readers.app')

@section('content')
    <div class="container">
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
    @endif
        <h1 class="text-center text-danger">Reader List  <i class="bi bi-person-vcard-fill text-primary"></i></h1>
        <a href="{{ route('readers.create') }}" class="btn btn-outline-primary"> Add new <i class="bi bi-pencil-square"></i></a>
        <table class="table mt-3">
            <thead class="text-center">
                <tr>
                    <th class="border border-secondary">ID</th>
                    <th class="border border-secondary">Name</th>
                    <th class="border border-secondary">Date of</th>
                    <th class="border border-secondary">Address</th>
                    <th class="border border-secondary">Phone number</th>
                    <th class="border border-secondary">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($reader as $read)
                    <tr>
                        <td class="border border-secondary">{{ $read->id }}</td>
                        <td class="border border-secondary">{{ $read->name }}</td>
                        <td class="border border-secondary">{{ $read->dob }}</td>
                        <td class="border border-secondary">{{ $read->address }}</td>
                        <td class="border border-secondary">{{ $read->phone_number }}</td>
                        <td class="border border-secondary text-center p-3">
                            <a href="{{ route('readers.show', $read->id) }}" class="btn btn-outline-secondary"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('readers.edit', $read->id) }}" class="btn btn-outline-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-outline-danger" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteModal"
                                    data-id="{{ $read->id }}" 
                                    data-name="{{ $read->name }}">
                                <i class="bi bi-trash"></i></div>
                            </button>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <span id="readerName"></span>? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <!-- Updated form with dynamic action -->
                    <form id="deleteForm" action="{{ route('readers.destroy', $read->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
