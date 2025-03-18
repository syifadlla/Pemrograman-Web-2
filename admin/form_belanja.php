<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white"><h4>Belanja Online</h4></div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Customer</label> 
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div> 
                                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label> 
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="tv" type="radio" class="custom-control-input" value="TV" required> 
                                        <label for="tv" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="Kulkas" required> 
                                        <label for="kulkas" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="Mesin Cuci" required> 
                                        <label for="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                <div class="col-8">
                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required min="1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <hr>
                <?php
                if (isset($_POST['submit'])) {
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    // Daftar harga
                    $harga_produk = [
                        "TV" => 4200000,
                        "Kulkas" => 3100000,
                        "Mesin Cuci" => 3800000
                    ];

                    // Hitung total harga
                    $total = $harga_produk[$produk] * $jumlah;

                    echo "<div class='alert alert-info mt-3'>";
                    echo "<h5>Detail Pembelian</h5>";
                    echo "<p><strong>Nama Customer :</strong> $customer</p>";
                    echo "<p><strong>Produk Pilihan :</strong> $produk</p>";
                    echo "<p><strong>Jumlah Beli :</strong> $jumlah</p>";
                    echo "<p><strong>Total Belanja :</strong> Rp. " . number_format($total, 0, ',', '.') . ",-</p>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Daftar Harga</div>
                    <div class="card-body">
                        <p><strong>TV :</strong> Rp. 4.200.000</p>
                        <p><strong>Kulkas :</strong> Rp. 3.100.000</p>
                        <p><strong>Mesin Cuci :</strong> Rp. 3.800.000</p>
                    </div>
                    <div class="card-footer bg-primary text-white text-center">Harga Dapat Berubah Setiap Saat</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
