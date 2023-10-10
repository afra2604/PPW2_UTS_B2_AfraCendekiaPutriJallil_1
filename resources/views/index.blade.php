<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    @yield('halo')
    <h1 class="text-center" >SISTEM TAMPILKAN BARANG</h1>
    <div class="container">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>nama_barang</th>
        <th>harga</th>
        <th>stok</th>
        <th>id_supplier</th>
    </tr>
</thead>
<tbody>
    @foreach ($barang as $data_barang)
<tr>
        <td>{{ $data_barang->id }}</td>
        <td>{{ $data_barang->nama_barang }}</td>
        <td>{{ "Rp".$data_barang->harga }}</td>
        <td>{{ $data_barang->stok }}</td>
        <td>{{ $data_barang->id_supplier }}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</body>
</html>