<!DOCTYPE html>
<html>
    <h1>Daftar Tiket Viyen Park</h1>
    <table border="1">
        <tr>
            <th>Nama Tiket</th>
            <th>Harga</th>
        </tr>
        @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->name }}</td>
            <td>Rp{{ number_format($ticket->price, 0, ',', '.') }}</td>
        </tr>
        @endforeach
</table>
</html>