<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex flex-column">
        <div class="">
            <button type="button" class="float-end btn btn-danger m-1 "><a href="/admin" class="text-light pt-1" style="text-decoration: none;">&#128473;</a></button>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Tambah Produk</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                            <option value="">Hewan</option>
                            <option value="">Sayuran</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">unit</label>
                        <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                            <option value="">Hewan</option>
                            <option value="">Sayuran</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" placeholder="1.000.000" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" placeholder="1.000.000" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" autocomplete="off" placeholder="10" required>
                    </div>


                    <div class="mb-3 text-center ">
                        <button type="submit" class="btn btn-primary px-5 ">Simpan</button>
                        <button type="button" class="btn btn-danger px-5"><a href="/admin" class="text-light" style="text-decoration: none;">Kembali</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>