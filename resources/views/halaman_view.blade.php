<html>

<head>
    <title>Halaman View</title>
</head>
<body><h4>Ini cuma halaman View biasa</h4></body>
<p>{{ $var1 }}</p>

@if ($var1 == 'Jam Tangan')
    <?php echo 'Jam Tangan baru punya Adam' ?>
@endif
<p>{{ $var2 }}</p>
<p>{{ $var3 }}</p>
<ul>
    @foreach ($transaksi as $item )
        <li>{{ $item->barang}}</li>
    @endforeach

</html>