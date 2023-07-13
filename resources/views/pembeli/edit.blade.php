<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<style>
  
</style>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Pembeli</h1>  
        <div class="card">
            <div class="card-body">
       <form action="{{ route('pembeli.update', $pembeli->id )}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="idpembeli" class="form-label">ID-PEMBELI</label>
          <input type="text" class="form-control" name="idpembeli" value="{{ $pembeli->idpembeli }}" id="idpembeli" >
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label">NAMA</label>
          <input type="text" class="form-control" name="nama" value="{{ $pembeli->nama }}"  id="nama" >
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">HARGA</label>
          <input type="text" class="form-control" name="harga" value="{{ $pembeli->harga }}"  id="harga" >
        </div>

        <div class="mb-3">
          <label for="produk" class="form-label">PRODUK</label>
            <select class="form-control" name="produk" id="jenisproduk">
              @foreach ($produk as $jp)
              @if($jp->id==$pembeli->produk)
              <option selected value="{{ $jp->id }}" {{($pembeli->jenisproduk->produk ?? old('produk')) == $jp->id ? 'selected' : '' }}>
                  {{ $jp->jenisproduk }}
              </option>
              @else 
               <option value="{{ $jp->id }}" {{($pembeli->jenisproduk->produk ?? old('produk')) == $jp->id ? 'selected' : '' }}>
                  {{ $jp->jenisproduk }}
              </option>
              @endif
              @endforeach
          </select>
           
       
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>