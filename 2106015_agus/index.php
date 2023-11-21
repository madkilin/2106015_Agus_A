<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/2106015_agus/archery.svg" />
    <link rel="stylesheet" href="style.css">
    <title>Archery Event Organizer</title>
</head>

<body>
    <form action="./proses_input.php" method="post">

        <h1>Archery Event Organizer</h1> <br>

        <hr>
        <h2>Formulir Archery Event Organizer</h2>
        <p>Silakan masukkan informasi mengenai event Anda</p>
        <hr>

        <h3>Banner</h3>
        <label for="banner">Link Banner Event</label> <br>
        <input type="url" name="banner" maxlength="200" required> <br>

        <h3>Detail Event</h3>

        <label for="namaEvent">Nama Event</label> <br>
        <input type="text" name="namaEvent" maxlength="100" required> <br>

        <label for="deskripsi">Deskripsi (Opsional)</label> <br>
        <textarea name="deskripsi" maxlength="500" rows="4" cols="50"></textarea> <br>

        <h3>Penyelenggara</h3>

        <label for="penyelenggara">Nama Penyelenggara</label> <br>
        <input type="text" name="penyelenggara" maxlength="100" required> <br>

        <label for="kontak">No. Kontak</label>
        <p>Max 13 digit</p>
        <input type="tel" name="kontak" pattern="[0-9]{10,13}" required> <br>

        <label for="email">Email</label> <br>
        <input type="email" name="email" maxlength="100" required> <br>

        <h3>Waktu dan Tempat</h3>

        <label for="tanggal">Tanggal</label> <br>
        <input type="date" name="tanggal" required> <br>

        <label for="alamat">Alamat</label> <br>
        <input type="text" name="alamat" maxlength="200" required> <br>

        <h3>Kategori perlombaan dan Biaya Registrasi</h3>
        <label for="kategori">Ketegori Perlombaan</label> <br>
        <textarea name="kategori" maxlength="500" rows="4" cols="50" required></textarea> <br>

        <label for="biaya">Biaya Registrasi</label> <br>
        <input type="number" name="biaya" min="0" required> <br>

        <h3>Informasi Event</h3>

        <label for="linkPendaftaran">Link Pendaftaran</label> <br>
        <input type="url" name="linkPendaftaran" maxlength="200" required> <br>

        <label for="thb">Link Technical Handbook</label> <br>
        <input type="url" name="thb" maxlength="200" required> <br>


        <label for="tambahan">Informasi Tambahan (Opsional)</label> <br>
        <textarea name="tambahan" maxlength="500" rows="4" cols="50"></textarea> <br>

        <button type="submit">Simpan</button>

    </form>
</body>

</html>