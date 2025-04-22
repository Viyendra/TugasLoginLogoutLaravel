<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/register">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <label>Konfirmasi Password:</label><br>
        <input type="password" name="password_confirmation" required><br><br>
        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="/login">Login disini</a></p>
</body>
</html>