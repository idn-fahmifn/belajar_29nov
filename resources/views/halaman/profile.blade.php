<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Profile</title>
</head>
<body>
    <h1>Ini adalah halaman Profile</h1>

    <p>Hallo, Kenalin nama saya, {{ $nama }}. Jabatan saya {{ $jabatan }} </p>
    <p>Saya memiliki Anggota tim sebanyak {{ $total }} Orang.</p>

    <a href="{{ route('halaman.home') }}">Ke halaman home</a>
</body>
</html>