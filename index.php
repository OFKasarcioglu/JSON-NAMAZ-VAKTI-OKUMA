<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ömer Faruk KASARCIOĞLU | NAMAZ VAKİTLERİ JSON OKUMA</title>

    <!-- Common Plugins -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Css-->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="horizontal">

<!-- ============================================================== -->
<!-- 						Başlangıç	 	    					-->
<!-- ============================================================== -->
<?php
$jsonData=file_get_contents("https://ezanvakti.herokuapp.com/vakitler/9654");
$Data=json_decode($jsonData);
?>

<br>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default">
                    NAMAZ VAKTİ JSON OKUMA - KOCAELİ
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>TARİH</th>
                            <th>İMSAK</th>
                            <th>GÜNEŞ</th>
                            <th>ÖĞLEN</th>
                            <th>İKİNDİ</th>
                            <th>AKŞAM</th>
                            <th>YATSI</th>
                            <th>AYIN ŞEKLİ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($Data as $vakit)
                        {
                        ?>
                        <tr>
                            <td># <?=$vakit->MiladiTarihUzun ?></td>
                            <td><?=$vakit->Imsak?></td>
                            <td><?=$vakit->Gunes?></td>
                            <td><?=$vakit->Ogle?></td>
                            <td><?=$vakit->Ikindi?></td>
                            <td><?=$vakit->Aksam?></td>
                            <td><?=$vakit->Yatsi?></td>
                            <td>
                                <img src="<?=$vakit->AyinSekliURL?>" />
                            </td>
                        </tr>
                            <?php
                        }
                        ?>
                        </tbody>

                        <style>
                            table tr td img { width: 30px}
                        </style>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- 						Bitiş	       	 						-->
<!-- ============================================================== -->



<!-- Common Plugins -->
<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/popper.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script><script src="assets/lib/ace-menu/ace-responsive-menu-min.js"></script>
<script src="assets/lib/pace/pace.min.js"></script>
<script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
<script src="assets/lib/metisMenu/metisMenu.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>