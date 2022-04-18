<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <?php
    $no = 1;
    include("KONEKSI.php");
    $cari=mysqli_query($konek, "SELECT * from administrator") or die (mysqli_error());
    ?>
    <table  class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">NAMA ADMIN</th>
            <th scope="col">USERNAME</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($data=mysqli_fetch_array($cari)){
            ?>
            <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $data['NAMA']; ?></td>
            <td><?php echo $data['USERNAME']; ?></td>
            <td>
                <a href="?z=HADMIN&id=<?php echo $data['ID']; ?>" class="btn btn-danger">Hapus</a>
                <a href="?z=EADMIN&id=<?php echo $data['ID']; ?>" class="btn btn-warning">Edit</a>
            </td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="?z=TADMIN" class="btn btn-primary font-weight-bold">TAMBAH</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<img src="PNG mio_M3_125" class="card-img-top" alt="">