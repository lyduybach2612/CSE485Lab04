@php
$id = 0    

@endphp
@extends('layout.app')

@section('content')

  @if(session('success'))
    <p style = 'color:green;'>{{ session('success') }}</p>
  @endif
      
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Public year</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
          <tr>
            <th scope="row">{{ ++$id }}</th>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category }}</td>
            <td>{{ $book->public_year }}</td>
            <td>{{ $book->quantity }}</td>   
            <td class ='text-center'><a href = "{{ route('books.show',$book->id) }}"><i class="bi bi-eye-fill"></i></a></td>
        <td class ='text-center'><a href = "{{ route('books.edit',$book->id) }}"><i class="bi bi-pencil-fill"></i></a></td>
        <td class ='text-center'>
          <button  class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash-fill"></i>
          </button>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                
                <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

            </form>           
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="pagination">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>

@endsection