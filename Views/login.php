<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            width: 400px;
            height: 500px;
            flex-direction: column;
            margin: auto;
            margin-top: 5%;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            justify-content: center;
            margin-top: 10px;
            padding: 5px;
            width: auto;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0069d9;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>login</h1>
        <form action="/authenticate" id="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">login</button>
        </form>

        <script>
            const form = document.getElementById('login-form');
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                const respone = await fetch('<?php echo base_url()?>authenticate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });
                if (respone.ok) {
                    window.location.href = '/dashboard';
                } else {
                    alert('login gagal');
                }
            });
        </script>
    </div>
</body>

</html>