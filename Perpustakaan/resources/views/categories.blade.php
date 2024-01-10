@extends('layout.mainlayout')

@section('title', 'categories')

@section('page-name', 'dashboard')

@section('content')
<h1>Catalogue</h1>
    <div class="mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
    </div>
    <!-- menampilkan tabel buku -->
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
            </tr>
        </thead>
        <tbody>
            @foreach($value as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->book_code }}</td>
                    <td>{{ $item->book_title }}</td>
                    <td><img class="editimg" src="{{url('storage/category/' . $item->cover)}}"></td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection