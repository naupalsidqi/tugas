<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Data  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  <br>
    <div class="container">
      <h2>Tambah Data Baru</h2><br/>
      <form action="{{ route('kategori.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Nama Kategori:</label>
            <input type="text" class="form-control" name="nama_kategori">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>