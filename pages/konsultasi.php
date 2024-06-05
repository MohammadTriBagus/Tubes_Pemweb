<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Online</title>
    <link rel="stylesheet" href="../styles/style_konsultasi.css">
    <script src="../scripts/konsultasi.js" defer></script>
    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const message = urlParams.get('message');
            if (message) {
                alert(decodeURIComponent(message));
            }
        };
    </script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Jiwaku</h1>
            <h2>Konsultasi Online</h2>
        </header>
        <form id="consultationForm" action="../action/konsultasi_proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan:</label>
                <textarea id="keluhan" name="keluhan" required></textarea>
            </div>
            <div class="form-buttons">
                <button type="button" id="cancelButton">Batal</button>
                <button type="submit" id="submitButton">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
