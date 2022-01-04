<h3>Masukan hashtag disini untuk mendownload file Excel</h3>
<div class="alert alert-warning" role="alert">
  <i class="fa fa-exclamation-triangle"></i> Penulisan Hashtag tidak memerlukan tanda pagar<br>
  contoh: <b>#test</b> -> cukup diketik -> <b>test</b>
</div>

<form action="" method="post">
    
        <label>Hashtag # </label> <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>" required/>
        <input type="submit" name="submit" value="Link Download" class="btn btn-success"/>

</form>
<?php
if (isset($_POST['submit'])) {
    echo 'Silahkan Download File Excel';?>
    <a href="http://polreslandak.com/export/?hashtag=<?php echo $_POST['nama'];?>">
    disini</a>

    <?php ;

}?>