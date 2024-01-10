@extends('layout.mainlayout')

@section('title', 'welcome')

@section('page-name', 'dashboard')

@section('content')
<form action="/update" method="post">
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
            <a href="books-rent" class="btn btn-primary">Add Rent Book</a>
        </div>
        
    <div class= "my-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Name</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Returned</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                    <td>{{ $item->book_title }}</td>
                    <td>{{ $item->name }}</td>
                        <td>{{ date("d-m-Y", strtotime($item->rent_date)) }}</td>
                        <td>{{ date("d-m-Y", strtotime($item->return_date)) }}</td>
                        @if($item->book){
                        @if($item->book->status == 'In Stock'){
                            <td></td>
                            <td>In Stock</td>
                        }
                        @else{
                            <td>
                        <a href="{{ route ('update.book', ['judul' => $item -> book_title]) }}"><i class="bi bi-check-square-fill"></a></td>
                            <td>Out Of Stock</td>
                        }
                        @endif
                    }
                    @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
                </form>

@endsection