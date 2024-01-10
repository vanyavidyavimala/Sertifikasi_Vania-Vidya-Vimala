@extends('layout.mainlayout')

@section('title', 'books')

@section('page-name', 'dashboard')

@section('content')
    <h1>Book List</h1>
    <div class="my-5 d-flex justify-content-end">
        <a href="books-add" class="btn btn-primary">Add Data</a>
    </div>
    <div class="mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
    </div>
    <!-- membuat tabel buku baru -->
    <div class= "my-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. </th>
                <th>Code</th>
                <th>Book Title</th>
                <th>Cover</th>
                <th>Author</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->book_code }}</td>
                    <td>{{ $item->book_title }}</td>
                    <td><img class="editimg" src="{{url('storage/category/' . $item->cover)}}"></td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->status }}</td>
                    <td> 
                    <a href="{{route('books.edit', ['id'=> $item->id]) }}">edit</a> 
                    <p>/</p>
                    <a href="{{route('delete.books', ['id'=> $item->id])}}"onclick="return confirm('Are you sure you want to delete this book?')">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection