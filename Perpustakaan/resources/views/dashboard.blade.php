@extends('layout.mainlayout')

@section('title', 'welcome')

@section('page-name', 'dashboard')

@section('content')

<h1>Welcome Admin</h1>
<div class="row mt-5">
    <div class="card-data book">
        <div class="row">
            <div class="col-lg-4">
                <div class="col-6"><i class="bi bi-book></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Rent List</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-5 d-flex justify-content-end">
        <a href="/books-rent" class="btn btn-primary">Add Rent Book</a>
    </div>
<div class= "mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Rent Name</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>g</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                <td>{{ $item->book_title }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->rent_date }}</td>
                    <td>{{ date("d-m-Y", strtotime($item->rent_date . ' + 7 days')) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection