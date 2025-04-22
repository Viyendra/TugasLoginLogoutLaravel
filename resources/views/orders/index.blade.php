<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pembelian Tiket</title>
</head>

<body>
    <h1>Daftar Pembelian Tiket</h1>

    @if(session('success'))
        <div style="background-color: green; color: white; padding: 10px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tiket</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->buyer_name }}</td>
                    <td>{{ $order->ticket->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>Rp{{ number_format($order->total_price) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
