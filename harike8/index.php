`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>
<body>
    <h1>Mengirim data dengan method GET</1><br>
    <a href="link1.php?nama=andri">link 1</a>

    <hr>
    <h1>Mengirim data dengan method POST</h1>
    <form action="link2.php" method="post">
        <input type="text" name="kelas" id="kelas">
        <button type="submit">kirim</button>
    </form>
</body>
</html>