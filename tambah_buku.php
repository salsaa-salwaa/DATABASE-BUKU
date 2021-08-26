<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tambah Buku</h3>
        <form action="proses_tambah_buku.php" method="post">
            Nama Buku:
            <input type ="text" name="nama_buku" value="" class="form-control">
            Penulis : 
            <input type ="text" name="penulis" value="" class="form-control">
            Penerbit : 
            <input type ="text" name="penerbit" value="" class="form-control">
            <input type ="submit" name="simpan" value="Tambah Buku" class="btn btn-primary">
        </form>
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    </html>
    