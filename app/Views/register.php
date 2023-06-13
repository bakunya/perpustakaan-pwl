<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <title>Register</title>

    <style>
        .container {
            padding: 20px;
            background-color: #f5f5f5;
            height: 400px;
            width: 30%;
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="/register" method="POST" id="register-form">
            <div>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" class="form-control" />
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div>
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
            </div>
        </form>
        <a href="/login">Login</a>
    </div>

    <script>
        const form = document.getElementById("register-form");
        const nama = document.getElementById("nama");
        const email = document.getElementById("email");
        const password = document.getElementById("password");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            // Validasi nama tidak kosong
            if (!nama.value) {
                alert("Nama tidak boleh kosong!");
                return;
            }

            // Validasi email tidak kosong dan harus valid
            if (!email.value || !isValidEmail(email.value)) {
                alert("Email tidak valid!");
                return;
            }

            // Validasi password minimal 8 karakter
            if (!password.value || password.value.length < 8) {
                alert("Password minimal 8 karakter!");
                return;
            }

            // Kirim data ke server
            this.submit();
        });

        // Validasi email harus valid
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    </script>
</body>

</html>