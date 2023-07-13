<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPLE CRUD | LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <style>
      *{
        margin: 0;
        padding: 0;
      }
      body {
        background-color: grey;
      }
      .container h1{
        color: #ffff;
        background-color: #45503B;
        border-radius: 5px;
        padding: 10px;
      }
  
      .container a {
        background-color: transparent;
        color:rgb(58, 54, 54) ;
        border: 1px solid transparent;
      }
      .container a:hover{
        opacity: 100%;
        background-color: #45503B;
        border: 1px solid #45503B;
        color: #ffff;
        transition: 0.4s;
      }
     .container button {
      background-color: #ffff;
      color: rgb(58, 54, 54) ;
      border: none;
     }
     .container button:hover {
      color: #ffff;
      background-color: rgb(25, 212, 35);
     }
     .data1, .data2, .data3, .data4, .data5 tr, th, td{
      color: black;
      border: 1px solid #45503B;
     }
    </style>

    <div class="container mt-5">
        <h1 class="text-center mb-5" >DATA PEMBELI</h1>  
        <a href="{{ route('pembeli.create') }}" class="btn btn-primary mb-3">TAMBAH DATA</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
             {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">   
                    <thead>
                        <th>NO</th>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>HARGA</th>
                        <th>PRODUK</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                      @if ($pembeli->count()>0)
                      @foreach ($pembeli as $no => $hasil)
                      <tr>
                        <div class="data1"><th>{{ $no+1 }}</th></div>
                        <div class="data2"><td>{{ $hasil->idpembeli }}</td></div>
                        <div class="data3"><td>{{ $hasil->nama }}</td></div>
                        <div class="data4"><td>{{ $hasil->harga }}</td></div>
                        <div class="data5"><td>{{ $hasil->fproduk?->jenisproduk }}</td></div>
                        <td>
                          <form action="{{route('pembeli.destroy', $hasil->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href= "{{route( 'pembeli.edit', $hasil->id) }}" class="btn btn-success btn-sm">EDIT</a>
                            <button class="btn btn-danger btn-sm">HAPUS</button>
                          </form>
                        </td>
                        
                        </tr>
                      @endforeach
                      
                          
                      @else
                      <tr>
                        <td colspan="10" align="center">TIDAK ADA DATA</td>
                       </tr>
                      @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="card">
    <div class="card-body">
      <table class="table">
        <tr>
              <th>NAMA PRODUK</th>
        </tr>
        <tr>
          <td> 
            @foreach ($produk as $jp)
            <option value="{{$jp->id}}">
              {{$jp->jenisproduk}}</option>
            @endforeach
          </td>
        </tr>
      </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>