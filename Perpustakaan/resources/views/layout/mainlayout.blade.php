<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<style>
    .main{
        height:100vh;
        
    }
    .sidebar{
        background:lightgrey;
        color:white;

    }
   
    .sidebar a{
        color: black;
        text-decoration:none;
        display:block;
        padding:20px 10px;
    }
    .sidebar a:hover{
        background: white;
    }
    .card-data{
        border: solid 1px;
        padding: 20px 10px;
        background-color: ;
    }
    .card-desc{
        font-size: 30px;
    }
    .card-count{
        
    }
    .editimg{
        width: 55px;
    }
    
</style>
<body>
    <!-- template layout page -->
    <div class="main d-flex flex-column justify-content-between ">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Book Rent Application</a>
  </div>
</nav>
    <div class="body-content h-100">
        <div class="row g-0 h-100">
        <div class="sidebar col-2">
            
                <a href="dashboard">Dashboard</a>
                <a href="books">Books</a>
                <a href="categories">Catalogue</a>
                <a href="rentlog">Rent Log</a>
                <a href="logout">Log Out</a>
        </div>
        <div class="content p-5 col-10">
             @yield('content')
        </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>