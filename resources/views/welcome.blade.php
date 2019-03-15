<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            
        </style>
    </head>
    <body>
    <div class="kolom12 header">
        <div class="kolom2 jalan">
            <a href="#jalan">Rental Film Yuk ! </a>
        </div>
        <div class="logo"><img src="{{ ('images/magnifier.png') }}" ><a href="#search"></a></div>
        <div class="kolom6 topnav font">
            
            <input type="text" placeholder="Search..">
        </div>
    </div>


    <div class="kolom12 gambar1">
        <div class="bawah">
            <h3>Malang, Jawa Timur</h3>
            <h2>
                Nikmati Ribuan Koleksi Film dari Kami<br />
                Anda Bisa Memesannya Dibawah Sini
            </h2>
            <a href="kategori"><button class="btn bromo txt">Kategori Film</button></a>
        </div>
    </div>

    <div class="kolom6 kiri">
        <b>Selamat Datang di Rental Film Yuk ! </b>
        <br /><br />
        <p>
            Hallo Semuanya !<br />
            Dapatkan referensi film yang dapat anda tonton untuk mengisi waktu
            luang yang kosong. Disini kami memberikan rekomendasi kategori film 
            untuk Anda. Mulai dari Horror, Komedi, Aksi dan masih banyak 
            lagi kategori yang lainnya. Ayo Ajak teman<br>dan keluargamu untuk memesan
            film di Rental Film Yuk. Dapatkan diskon untuk pembelian pertama anda dengan
            cara klik tombol dibawah ini.
        </p>
        
        <button class="btn ayo">DISKON !!!</button>
    </div>

    <div class="kolom5 kanan"></div>

    <div class="kolom12 bar">
        <div class="kolom5 bir">
            <b>Rekomendasi Pilihan Film</b>
        </div>
    </div>

    <div class="kolom2 gambar2 container">
        <a href="lifeofpi" class="garis">
            <div class="content wadaw">
                <b class="judul">Life Of Pi</b>
                <p class="isi">Life of Pi adalah film drama fantasi petualangan
                 Amerika Serikat tahun 2012 yang disutradarai...</p>

            </div>
        </a>
    </div>

    <div class="kolom2 gambar3 container">
        <a href="thesecretlifeofpet" class="garis">
            <div class="content">
                <b class="judul">The Secret Life Of Pet</b>
                <p class="isi">The Secret Life of Pets adalah sebuah film komedi 
                animasi komputer 3D Amerika 2016 yang...</p>

            </div>
        </a>
    </div>

    <div class="kolom2 gambar4 container">
        <a href="bandung" class="garis">
            <div class="content">
                <b class="judul">Thor Ragnarok</b>
                <p class="isi">Thor: Ragnarok adalah film pahlawan super
                 berdasarkan karakter Marvel Comics, Thor,...</p>
            </div>
        </a>
    </div>

    <div class="kolom2 gambar5 container">
        <a href="bintan" class="garis">
            <div class="content">
                <b class="judul">Avengers: Infinity War</b>
                <p class="isi">Avengers: Infinity War adalah film superhero yang
                 beranggotakan tim superhero Avengers...</p>
            </div>
        </a>
    </div>

    <div class="kolom2 gambar6 container">
        <a href="yogyakarta" class="garis">
            <div class="content">
                <b class="judul">Arrival</b>
                <p class="isi">Arrival adalah film drama misteri fiksi ilmiah
                 Amerika Serikat tahun 2016 yang...</p>
            </div>
        </a>
    </div>

    <div class="kolom12 dukung">
        Ayo Dukung Perindustrian Film Indonesia
    </div>

   

    <div class="kolom12 footer">
        <div class="kolom2 lokasi">
            <b>About Us</b>
            <hr>
            <p>Aldiansyah Naupal Shidqi<br>
            173140914111028</p>

        </div>
        <div class="kolom3 asp">
            <b>Rental Film Yuk !</b>
        </div>
        <div class="kolom2 about">
            <b>Kategori Film</b>
            <hr>
            <a href="horror" target="_blank">Horror</a><br />
            <a href="horror" target="_blank">Action</a><br />
            <a href="horror" target="_blank">Adventure</a><br />
            <a href="horror" target="_blank">Fantasy</a><br />
        </div>
    </div>

    <div class="kolom12 day">
        &copy; Copyright 2019
    </div>
    </body>
</html>
