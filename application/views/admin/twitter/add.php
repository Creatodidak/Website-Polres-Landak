
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Input viralisasi twitter Disini</h3>
            </div>
            <div class="alert alert-warning" role="alert">
  <i class="fa fa-exclamation-triangle"></i> Penulisan Hashtag tidak memerlukan tanda pagar<br>
  contoh: <b>#test</b> -> cukup diketik -> <b>test</b>
</div>
            <?php  echo form_open('twitter/add'); ?>
                      	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
    <!-- Buat tombol untuk menabah form data -->
    
    <button type="button" id="btn-reset-form" class="btn btn-failed">Reset Form</button><br><br>
    Hashtag: #<input type="text" name="hashtag" ><br><br>
    <b>Link 1 :</b>
    <input type="text" name="link[]" class="form-control" placeholder="Masukan 1 Link disini"required></td>
      
    <br>

    <div id="insert-form"></div>
    
    <hr>
    <button type="button" id="btn-tambah-form" class="btn btn-success">Tambah Link</button>
    <input type="submit" value="Simpan" class="btn btn-success">
  </form>
  
  <!-- Kita buat textbox untuk menampung jumlah data form -->
  <input type="hidden" id="jumlah-form" value="1">
  
  <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<b>Link " + nextform + " :</b>" +
        "<input type='text' name='link[]' class='form-control' placeholder='Masukan 1 Link disini' required></td>" +
        
        "<br>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>