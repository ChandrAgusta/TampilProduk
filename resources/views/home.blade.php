<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>
        Daftar Produk
    </h1>
    <table border = "1px" cellpadding = "4">
        <tr >
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Detail</th>       
        </tr>
        @foreach ($data as $p)     
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga }}</td>
            <td><a href="/home/{{ $p->id }}">details</a></td>
            {{-- <td><img src="image/{{ $p->foto }}" alt="{{ $p->nama }}" width = "100px"></td> --}}
        @endforeach
        </tr>
    </table>
</body>
</html>