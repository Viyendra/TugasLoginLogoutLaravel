<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang di Dashboard!</h1>

    <p>Halo, {{ Auth::user()->name }} 👋</p>

    <h2>Menu</h2>
    <ul>
        <li><a href="/orders">Lihat Pesanan</a></li>
        <li><a href="/orders/create">Beli Tiket</a></li>
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>