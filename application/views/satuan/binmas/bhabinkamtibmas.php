<style>
body {
font-family: sans-serif;
background-color: #eeeeee;
}

.file-upload {
background-color: #ffffff;
width: 600px;
margin: right;
padding: 20px;
}

.file-upload-btn {
width: 100%;
margin: 0;
color: #fff;
background: #1FB264;
border: none;
padding: 10px;
border-radius: 4px;
border-bottom: 4px solid #15824B;
transition: all .2s ease;
outline: none;
text-transform: uppercase;
font-weight: 700;
}

.file-upload-btn:hover {
background: #1AA059;
color: #ffffff;
transition: all .2s ease;
cursor: pointer;
}

.file-upload-btn:active {
border: 0;
transition: all .2s ease;
}

.file-upload-content {
display: none;
text-align: center;
}

.file-upload-input {
position: absolute;
margin: 0;
padding: 0;
width: 100%;
height: 100%;
outline: none;
opacity: 0;
cursor: pointer;
}

.image-upload-wrap {
margin-top: 20px;
border: 4px dashed #1FB264;
position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
background-color: #1FB264;
border: 4px dashed #ffffff;
}

.image-title-wrap {
padding: 0 15px 15px 15px;
color: #222;
}

.drag-text {
text-align: center;
}

.drag-text h3 {
font-weight: 100;
text-transform: uppercase;
color: #15824B;
padding: 60px 0;
}

.file-upload-image {
max-height: 200px;
max-width: 200px;
margin: auto;
padding: 20px;
}

.remove-image {
width: 200px;
margin: 0;
color: #fff;
background: #cd4535;
border: none;
padding: 10px;
border-radius: 4px;
border-bottom: 4px solid #b02818;
transition: all .2s ease;
outline: none;
text-transform: uppercase;
font-weight: 700;
}

.remove-image:hover {
background: #c13b2a;
color: #ffffff;
transition: all .2s ease;
cursor: pointer;
}

.remove-image:active {
border: 0;
transition: all .2s ease;
}

</style>

<div class="col-md-10 offset-md-1" style="background-color: #fff">
<div class="row">
	

	<div class="col-md-12 text-center" style="margin-top: 20px;">
		<img src="https://seeklogo.com/images/B/binmas-logo-5BD209B212-seeklogo.com.png" alt="" height="150px">
	<br/>
		<h3><b>REGISTRASI DATA BHABINKAMTIBMAS</b></h3>
	</div>
	<div class="col-md-8 offset-md-2" style="text-align: justify;margin-top: 20px;border-left: 10px solid orange">

    <form method="get" action="/bhabinkamtibmas/input">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="pangkat" class="col-4 col-form-label">Pangkat</label> 
    <div class="col-8">
      <select id="pangkat" name="pangkat" class="custom-select" required="required">
        <option value="Bripda">Brigadir Polisi Dua</option>
        <option value="Briptu">Brigadir Polisi Satu</option>
        <option value="Brigpol">Brigadir Polisi</option>
        <option value="Bripka">Brigadir Polisi Kepala</option>
        <option value="Aipda">Ajun Inspektur Polisi Dua</option>
        <option value="Aiptu">Ajun Inspektur Polisi Satu</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nrp" class="col-4 col-form-label">NRP</label> 
    <div class="col-8">
      <input id="nrp" name="nrp" placeholder="NRP" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="satker" class="col-4 col-form-label">Satker</label> 
    <div class="col-8">
      <select id="satker" name="satker" class="custom-select" required="required">
        <option value="Ngabang">Polsek Ngabang</option>
        <option value="Air Besar">Polsek Air Besar</option>
        <option value="Kuala Behe">Polsek Kuala Behe</option>
        <option value="Meranti">Polsek Meranti</option>
        <option value="Menyuke">Polsek Menyuke</option>
        <option value="Menjalin">Polsek Menjalin</option>
        <option value="Mempawah Hulu">Polsek Mempawah Hulu</option>
        <option value="Sengah Temila">Polsek Sengah Temila</option>
        <option value="Sebangki">Polsek Sebangki</option>
        <option value="Mandor">Polsek Mandor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label> 
    <div class="col-8">
      <select id="kecamatan" name="kecamatan" required="required" class="custom-select">
        <option value="Ngabang">Ngabang</option>
        <option value="Air Besar">Air Besar</option>
        <option value="Kuala Behe">Kuala Behe</option>
        <option value="Jelimpo">Jelimpo</option>
        <option value="Menyuke">Menyuke</option>
        <option value="Banyuke Hulu">Banyuke Hulu</option>
        <option value="Meranti">Meranti</option>
        <option value="Sengah Temila">Sengah Temila</option>
        <option value="Mandor">Mandor</option>
        <option value="Sebangki">Sebangki</option>
        <option value="Mempawah Hulu">Mempawah Hulu</option>
        <option value="Sompak">Sompak</option>
        <option value="Menjalin">Menjalin</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="desa" class="col-4 col-form-label">Desa</label> 
    <div class="col-8">
      <input id="desa" name="desa" placeholder="Nama Desa" type="text" class="form-control" aria-describedby="desaHelpBlock"> 
      <span id="desaHelpBlock" class="form-text text-muted">**) Contoh : Senakin</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="nomortelepon" class="col-4 col-form-label">Nomor Telepon</label> 
    <div class="col-8">
      <input id="nomortelepon" name="nomortelepon" placeholder="08xxxxxxxxxx" type="text" class="form-control" required="required">
    </div>
  </div> 



<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Foto Personil</button>

<div class="image-upload-wrap">
<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
<div class="drag-text">
  <h3>Seret Gambar atau Tap Disini</h3>
</div>
</div>
<div class="file-upload-content">
<img class="file-upload-image" src="#" alt="your image" />
<div class="image-title-wrap">
  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
</div>
</div>
</div>



<div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Input</button>
    </div>
  </div>


</form>

	</div>
	
<div class="col-md-12 text-center text-xl" style="margin-top: 30px; margin-bottom: 30px;">

		<img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polisi_presisi.webp" alt="" height="85px">
		Prediktif, Responsibilitas, Transparansi Berkeadilan
		<img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polwan.webp" alt="" height="85px">
	</div>

</div>
</div>


<script type = "text/javascript">
unction readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});


</script>



