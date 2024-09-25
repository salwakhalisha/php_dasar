`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>
<body>
    <h1>Mengirim data dengan method GET</1><br>
    <a href="harike8/link1.php?halaman=link1&nama=andri">link 1</a>

    <hr>
    <h1>Mengirim data dengan method POST</h1>
    <form action="harike8/link2.php?halaman=link2" method="post">
        <br>
       <div class="b-3">
       <label for="nama" class="form-label"><h4>Nama</h4></label>
            <input type="text" name="nama"id="nama" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="Kelas" class="form-label"><h4>Kelas</h4></label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="X RPL 1">XI RPL 1</option>
                <option value="X RPL 1">X RPL 2</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="jk" class="form-label"><h4>Jenis Kelamin</h4></label>
            <select name="jk" id="jk" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>