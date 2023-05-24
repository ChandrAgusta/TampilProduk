<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <h2>{{ $data->nama }}</h2>
    
    <tr> 
        <td>
            <td><img src="{{ asset('image/') . '/' . $data->foto }}" alt="{{ $data->nama }}" width="150px"></td>
        </td>
    </tr>

    <tr>
        <td>
            <p>Merk: {{ $data->merk }}</p>
            <p>Harga: {{ $data->harga }}</p>
            <p>Expired: {{ $data->exp }}</p>
            <p>Distributor: {{ $data->distributor }}</p>
        </td>
    </tr>

    <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
</body>
</html>
