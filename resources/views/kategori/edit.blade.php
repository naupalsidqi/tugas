<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  <br>
  <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit</h1>
            <hr>
            @foreach($kategori as $kategori)
            <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group col-md-4">
                    <label for="nama">Nama Kategori:</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
                </div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
  </body>
</html>