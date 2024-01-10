@extends('layout.mainlayout')

@section('title', 'AddBook')

@section('page-name', 'dashboard')

@section('content')
    <h1>Add Rent Book</h1>
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
       <!-- insert rent book -->
       <form action="/books-rent" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title" class="form-label">Book Title</label>
            <br>
            <select name="dropdown">
                @foreach ($data->where('status', 'In Stock') as $option)
                <option value="{{$option->book_title}}">{{$option->book_title}}</option>
                @endforeach
            </select>
        </div>
        <div class= "mb-3">
            <label for="name" class="form-label">Rent Name</label>
            <input type="text" name="rent_name" id="rent_name" class="form-control" placeholder="Rent name">
        </div>
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Save</button>

        </div>
       </form>
            </div>
    </table>
</div>
@endsection