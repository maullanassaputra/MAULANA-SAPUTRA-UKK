<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" mt-5>
    <div class="row justify-content-center">
    <div class="col-md-4">
    <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
    <form method="POST" class="border rounded bg-info p-2">
        <label class="form-label">Harga Barang (Rp)</label>
        <input type="number" name="harga" class="form-control" step="0.01" placeholder="Masukan Harga Barang" min="0" auotocomplate="off"
        required onkeypress="return event.charCode >= 48 && event.charCode <=57">
        <label class="form-label">Diskon (%)</label>
        <input type="text" maxleght="3" name="diskon" class="form-control" step="0.01" placeholder="Masukan Diskon (0-100)" min="0" auotocomplate="off"
        required onkeypress="return event.charCode >= 48 && event.charCode <=57">

        <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung">Hitung</button>
        <button type="reset" class="btn btn-danger w-100 mt-2">HAPUS</button>
   </div>
    </form>
    <div id="hasil">
    <?php
      
      if (isset($_POST['hitung'])){
        $harga = $_POST['harga'];
        $diskon =$_POST['diskon'];

      if($harga < 0){
        echo "<script>alert('Harga barang tidak boleh negatif!')</script>";
      }elseif($diskon < 0 || $diskon > 100){
        echo "<script>alert('Diskon harus 0-100')</scrptt>";
      }else{
        $nilai_diskon =$harga * ($diskon/100);
        $total_harga = $harga - $nilai_diskon; ?>

         <div class="border rounded bg-light p-2">
            <p>Harga awal barang : Rp.<b><?php echo number_format($harga,2,',','.')?></b></p>
            <p>Diskon <?php echo $diskon?> % : Rp. <?php echo number_format($nilai_diskon,2,',','.')?></p>
            <p>Total harga barang <b><?php echo number_format($total_harga,2,',','.')?></b></p>
            <button type="reset" id="resetButton" class="btn btn-costum w-100">Hapus</button>__
         </div>
    <?php }
      }
         ?>
    </div>
    <p class="text-center">&copy; UKK RPL MAULANA SAPUTRA BRAUNE</a></p>
    </div>
         <script>
         document.getElementById('resetbutton').addEevntlistener('click', function()
            document.getElementById('hasil').innerHTML ='';
        });
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>
</html>