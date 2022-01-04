<!DOCTYPE html>
<html>
    
    <!--- DI CODING OLEH ANGGI PERIANTO --->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Dashboard Admin SP2HP Polres Landak</title>
        <meta name="description" content="Laman Khusus Admin">
        <link rel="icon" type="image/png" sizes="1073x1278" href="<?php echo base_url()?>/assets/sp2hp/img/Logo_Bareskrim.png">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="<?php echo base_url()?>/assets/sp2hp/bootstrap/css/bootstrap.min.css?h=870f133fcdcabb94933e456c279b390c">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/assets/sp2hp/css/styles.min.css?h=867c966fa2438786617bc3674e77eb71">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/modal.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="row">
                    <div class="col">
                        <div class="modal fade centro" role="dialog" tabindex="-1" id="modal">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title txtsGrises">TAMBAH DATA</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                                            
                                            <div class="beautiful bs-callout bs-callout-warning">
                                                <p>
                                                    File wajib berformat PDF
                                                </p>
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;margin-bottom: 10px;padding: 6px;"><label for="file-input">Format A1 :&nbsp;</label><input type="file" id="a2file" name="a2file" required=""></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                            <input type="submit" name="submit" class="btn btn-primary btn-Oscuro" value="UPLOAD">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
        <script src="/assets/js/script.min.js?h=846ceae5e8e55256bf542771f830b19c"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
        $(function () {
        $('.media').media({width: 868});
        });
        </script>
    </body>
</html>