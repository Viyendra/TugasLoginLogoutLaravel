<!DOCTYPE html>
<html>
<head>
    <title>Beli Tiket</title>
</head>
<body>
<h1>Beli Tiket</h1>

<form action="/orders" method="POST">
    @csrf
    Nama Pembeli: <input type="text" name="buyer_name" required><br><br> <!-- name = name -->
    
    Pilih Tiket:
    <select name="ticket_id" required>
        @foreach($tickets as $ticket)
            <option value="{{ $ticket->id }}">{{ $ticket->name }} - Rp{{ number_format($ticket->price) }}</option>
        @endforeach
    </select><br><br>
    
    Jumlah: <input type="number" name="quantity" min="1" required><br><br> <!-- name = quantity -->
    
    <button type="submit">Beli</button>
</form>

</body>
</html>
