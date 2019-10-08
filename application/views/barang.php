<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <table class="table table-responsive table-bordered" style="width:100%">
        <thead>
            <tr class="table-primary text-nowrap">
                <th>No</th>
                <th>ID Barang</th>
                <th>Nama barang</th>
                <th>ID Admin</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $m) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $m['id_barang']; ?></td>
                    <td><?= $m['nama_brg']; ?></td>
                    <td><?= $m['id_admin']; ?></td>

                    <td>
                        <a>Kirim</a>
                        <a>Edit</a>
                        <a>Hapus</a>
                    </td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>