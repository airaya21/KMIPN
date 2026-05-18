<!DOCTYPE html>
<html lang="id">
<head>
    <title>Superadmin Dashboard</title>
</head>
<body>
    <h1>Selamat Datang di Superadmin Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
