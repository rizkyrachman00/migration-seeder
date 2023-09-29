<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link rel="stylesheet" href="/css/styles-input.css">
</head>

<body>
    <div class="container">
        <h2>DASHBOARD PRESENSI MAHASISWA</h2>
        <p>Agus Mujianto, M.Kom - Metedologi Penelitian(MT023)</p>
        <p>Informatika03</p>
        <div class="form-container">
            <form action="#" method="post">

                <div class="form-group">
                    <label class="form-label" for="nim">NIM MAHASISWA</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                
                <button type="submit">SUBMIT</button>

                <div class="form-group">
                    <label class="form-label" for="comments"></label>
                    <textarea id="comments" name="comments" rows="6" required class="textarea-right"></textarea>
                </div>
                

            </form>
        </div>
    </div>
</body>

</html>

