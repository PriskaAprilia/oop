<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Data Penduduk</title>
    </head>
    <body>
     <fieldset>
     <Legend>Data Penduduk</Legend>
           <form avtion="" method="post">
           <label for ="">Jumlah Penduduk</label>
           <input type="number" name="jmlh" min"1" required>
           <input type="submit" value="Next" name="simpan">
           <input type="hidden" name="<?php echo $jmlh; ?>">
    </form>
    
    <?php
    if(isset($_POST['simpan'])){
        $jmlh = $_POST['jmlh'];
        for($i=1; $i <= $jmlh; $i++) {
            #code...


    ?>
    <form action="latihanarraypro.php"method="post">
    <hr>
      <label for ="">Nama</label>
      <input type="text" name="nama[]" required>
      <label for="">Nik</label>
      <input type="number" name="nik[]" min="0" required>
      <label for = "">Alamat</label>
      <textarea name="alamat[]" required></textarea>
      <label for="">umur</label>
      <input type="number" name="umur[]" min"0" required>
      <br><br>
        <?php } ?>
        <input type="submit" value="proses" name="prosses">
        </form>
       
        </fieldset>
    <?php } ?>
    </body>
    </html>
     
    