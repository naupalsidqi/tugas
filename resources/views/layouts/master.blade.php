<!DOCTYPE html>
<html lang="en">
<head>
<style>
.kolom1 {width:8.333%}
.kolom2 {width:16.66%}
.kolom3 {width:25%;}
.kolom4 {width:33.33%;}
.kolom5	{width:41.66%}
.kolom6	{width:50%}
.kolom7	{width:58.33%}
.kolom8	{width:66.66%}
.kolom9	{width:75%;}
.kolom10 {width:83.33%}
.kolom11 {width:91.66%}
.kolom12 {width:100%}
[class*="kolom"]
{
    float: left;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
</head>
<body style="background-color:#20c3ff;">
   <div class="kolom3"> @include('layouts.sidebar')</div>
    <div class="kolom9">@yield('ashiap')</div>
</body>
</html>