@extends('layout.mainlayout')

@section('title', 'AddBook')

@section('page-name', 'dashboard')

@section('content')
    <h1>Add New Book</h1>
    <div class="mt-5 w-50">
       @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
       </div>
       @endif
       <!-- insert buku -->
       <form action="/books-add" method="post" enctype="multipart/form-data">
        @csrf
        <div class= "mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book's Code">
        </div>
        <div>
            <label for="title" class="form-label">Book Title</label>
            <input type="text" name="book_title" id="book_title" class="form-control" placeholder="Book's Title">
        </div>
        <div>
            <label for="title" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Author">

        </div>
        <div>
            <label for="cover" class="form-label">Cover</label>
            <input type="file" name="cover" class="form-control" id="cover">
            
        </div>
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Save</button>

        </div>
       </form>
            </div>
    </table>
</div>
@endsection