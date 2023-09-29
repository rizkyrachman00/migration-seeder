<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/styles-login.css">
    <link rel="stylesheet" href="/img/logo.ico">
</head>

<body>

    <body>
        <div class="container">
            <div class="header">
                <img src="img/logo.png" alt="Logo" class="logo">
                <h1>University of East London</h1>
            </div>

            <h2 style="font-size: 30px">PRESENSI PERKULIAHAN</h2>

            <div class="form-container">
                <div class="judul">
                    <h2>LOGIN DOSEN</h2>
                </div>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <label for="nik">NIK</label>
                    <input type="text" id="NIK" name="NIK" placeholder="NIK" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>

                    <button type="submit">LOGIN PRESENSI PERKULIAHAN</button>
                </form>
            </div>

        </div>
    </body>
</body>

</html>