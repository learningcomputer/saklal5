<html>

<head> </head>

<body>
    <h4>{{ $pelanggan->nama }}</h4><br />
    Pernah transaksi:
    <ul>
        @foreach ($pelanggan->transaksi as $item)
            <li>{{$item->barang}}</li>
            
        @endforeach
    </ul>
</body>

</html>
