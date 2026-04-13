<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-3">Register</h3>

        <form method="POST" action="../controllers/c_auth.php?aksi=register">
            
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input class="form-control" name="nama" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button class="btn btn-success w-100">Daftar</button>
        </form>

        <div class="text-center mt-3">
            <small>Sudah punya akun? <a href="index.php">Login</a></small>
        </div>
    </div>

</div>

</body>
</html>