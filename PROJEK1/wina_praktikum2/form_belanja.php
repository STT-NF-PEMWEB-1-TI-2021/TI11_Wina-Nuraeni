<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
</br>
  <center>
    <h3> Belanja Online </h3>
</center>
            <hr>
</body>
<table border="1" align="right">
  <tr bgcolor="#0000FF">
    <td>Daftar Harga</td>
  </tr>
  <tr>
    <td>TV : 4.200.000</td>
  </tr>
  <tr>
    <td>Kulkas : 3.100.000</td>
  </tr>
  <tr>
    <td>MESIN CUCI : 3.800.000</td>
  </tr>
  <tr bgcolor="#0000FF">
    <td>Harga Dapat Berubah Setiap Saat</td>
  </tr>
</table>

<form method ="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jml" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jml" name="jml" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success ">Kirim</button>
    </div>
  </div>
</form>

<?php
    $proses = $_POST['proses'];
    $_customer = $_POST['customer'];
    $_produk = $_POST['produk'];
    $_jml = $_POST['jml'];
    $_harga_tv = 4200000;
    $_harga_kulkas = 3100000;
    $_harga_mesin_cuci = 3800000;

    echo 'Proses : '.$proses;
    echo 'Nama Customer: ' . $_customer . '<br>';
    echo 'Produk: ' . $_produk . '<br>';
    echo 'Jumlah: ' . $_jml . '<br>';
    {
        if ($_produk == 'TV' && $_jml > 0) {
            echo 'Total harga: Rp. '. number_format($_harga_tv * $_jumlah, 0, ',', '.'). '<br>';
        } else if ($_produk == 'KULKAS' && $_jml > 0) {
            echo 'Total harga: Rp. '. number_format($_harga_kulkas * $_jml, 0, ',', '.'). '<br>';
        } else if ($_produk == 'MESIN CUCI' && $_jml > 0) {
            echo 'Total harga: Rp. '. number_format($_harga_mesin_cuci * $_jml, 0, ',', '.'). '<br>';
        }
    }

    ?>