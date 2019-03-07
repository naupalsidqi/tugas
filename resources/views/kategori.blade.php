<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css')}}">
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
    </head>
<body style="background-color:#20c3ff;">
    <br><br>
    <center><h1>Tabel Kategori</h1></center> 
    <center>
    <table width='50%' class="table table-bordered">
        <thead class="bg-primary">
        <tr style="text-align:center;">
            <th scope="col">Kategori ID</th>
            <th scope="col">Nama Kategori</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kategori as $category)
            <tr>
                <td class="bg-warning">{{$category->kategori_id}}</td>
                <td class="bg-warning">{{$category->nama_kategori}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </center>
</body>
</html>