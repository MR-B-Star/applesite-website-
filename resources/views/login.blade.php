<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applesites | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #70e000, #38b000);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .card {
            background-color: #fff;
            color: #333;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .btn-apple {
            background-color: #38b000;
            color: #fff;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-apple:hover {
            background-color: #2d8000;
            color: #fff;
        }
        .apple-icon {
            font-size: 50px;
            color: #38b000;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="card p-4">
                <div class="text-center mb-3">
                    <i class="bi bi-apple apple-icon"></i>
                    <h3 class="fw-bold mt-2">Applesites</h3>
                    <p class="text-muted">Masuk untuk mengelola harga apel 🍎</p>
                </div>

                @if(session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('doLogin') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    </div>

                    <button type="submit" class="btn btn-apple w-100 mt-3">Login</button>
                </form>

                <div class="text-center mt-3">
                    <small class="text-muted">© 2025 Applesites</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.js"></script>
</body>
</html>
