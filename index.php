<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Beasiswa</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 50px;
        background: #eeeded;
      }
      .starter-template {
        padding: 20px 15px;
        text-align: center;
      }
      .alert{
        text-align: center !important;
      }
      .pt10{
        padding-top: 10px !important;
      }

      .navbar-inverse {
        background-color: #950927 ;
        border-color:  #6d0f23 ;
        color: #fff !important;
      }
      .navbar-inverse .navbar-brand {
        color: #fff;
      }
      .nol,
      .rendah,
      .sedang,
      .tinggi{
        border: none;
        border-radius: 15px;
        margin-left: 5px;
        margin-right: 5px;
        width: 125px;
        cursor: default;
      }
      .nol{
        background-color:  #eee ;
        color: #999;
        padding: 3px;
        text-align: center !important;
      }
      .rendah{
        background-color: #c6ebc9;
        color: #000;
        padding: 3px;
        text-align: center !important;
      }
      .sedang{
        background-color:  #bedcfa ;
        color: #000;
        padding: 3px;
        text-align: center !important;
      }
      .tinggi{
        background-color:  #ffa5a5  ;
        color: #000;
        padding: 3px;
        text-align: center !important;
      }
      .alert{
        color: #000 !important;
      }
      .alert-warning{
        background-color: #f5eb25 !important;
      }
      .alert-success{
        background-color: #1ea318  !important;
      }
      .alert-info{
        background-color: #62a0f3  !important;
      }
      .close:hover{
        color: red;
      }
      .modal-header{
        color: #30475e;
      }
      button#hitung{
        background-color:#30475e;
        color:white;
        width: 100%;
      }
      .navbar {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #222831;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        width: 100%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-width: 910px;
        border: none;
        border-radius: 0px;
      }
      .left-navbar {
        float: left;
      }
      .right-navbar {
        float: right;
      }
      .menu a,
      .left-navbar a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      .name a{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-color: #30475e;
        border-bottom: 4px solid #30475e;
      }
      .menu a:hover {
        border-bottom: 4px solid #f05454;
        color: #f8f1f1;
        transform: scale(1.02,1.02);
        transition: transform 0s;
      }
      .left-navbar:hover{
        cursor: default;
      }
      .right-navbar a:hover {
        cursor: pointer;
      }
      .active {
        background-color: CadetBlue;
        border-bottom: 4px solid CadetBlue;
      }
      .table-rules{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
      }
      .table-rules td{
        padding: 15px;
      }
      .table-hasil,
      .table-rumus{
        width: 100%;
      }
      .table-hasil td,
      .table-rumus td{
        border: none;
        padding: 5px 0px;
      }
    </style>
  </head>

  <body>

    <nav class="navbar-fixed-top">
      <ul class="navbar">
        <li class="left-navbar name">
            <a>
                <span>CAECILIA | H1051181030</span>
            </a>
        </li>
        <li class="left-navbar">
            <a>
                <span>MENENTUKAN PEROLEHAN BEASISWA MENGGUNAKAN METODE FUZZY TSUKAMOTO</span>
            </a>
        </li>
        <li class="right-navbar menu">
            <a class="active" data-toggle="modal" data-target="#modal-hitung">
                <span>HITUNG BEASISWA</span>
            </a>
        </li>
      </ul>
    </nav>

    <div class="container">
      <div class="row" style="padding-top:35px;">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <center><h3>Fungsi Keanggotaan<br>UKT</h3><center>
          <hr>
            <img data-toggle="modal" data-target="#modal-image" src="src/ukt.png" data-src="src/fungsiukt.png" class="img img-responsive img-thumbnails" style="cursor:pointer;">
          </div>
          <div class="col-md-4">
          <center><h3>Fungsi Keanggotaan<br>IPK</h3><center>
          <hr>
            <img data-toggle="modal" data-target="#modal-image" src="src/ipk.png"  data-src="src/fungsiipk.png" class="img img-responsive img-thumbnails" style="cursor:pointer;">
          </div>
          <div class="col-md-4">
          <center><h3>Fungsi Keanggotaan<br>Perolehan Beasiswa</h3><center>
          <hr>
            <img data-toggle="modal" data-target="#modal-image" src="src/beasiswa.png"  data-src="src/fungsibeasiswa.png"  class="img img-responsive img-thumbnails" style="cursor:pointer;">
          </div>
        </div>
      </div>
      <hr>
        <center>
          <hr>
          <h3>Rules yang digunakan:</h3>
          <hr>
          <table class="table-rules">
            <tr>
              <td align=center>
                R1
              </td>
              <td>
                Jika UKT <span style="color:#d35d6e;"><b>murah</b></span> dan IPK <span style="color:#d35d6e;"><b>baik</b></span>, maka beasiswa <span style="color:#d35d6e;"><b>kecil</b></span>.
              </td>
            </tr>
            <tr>
              <td align=center>
                R2
              </td>
              <td>
                Jika UKT <span style="color:#d35d6e;"><b>murah</b></span> dan IPK <span style="color:#583d72;"><b>sangat baik</b></span>, maka beasiswa <span style="color:#d35d6e;"><b>kecil</b></span>.
              </td>
            </tr>
            <tr>
              <td align=center>
                R3
              </td>
              <td>
                Jika UKT <span style="color:#944e6c;"><b>sedang</b></span> dan IPK <span style="color:#d35d6e;"><b>baik</b></span>, maka beasiswa <span style="color:#d35d6e;"><b>kecil</b></span>.
              </td>
            </tr>
            <tr>
              <td align=center>
                R4
              </td>
              <td>
                Jika UKT <span style="color:#944e6c;"><b>sedang</b></span> dan IPK <span style="color:#583d72;"><b>sangat baik</b></span>, maka beasiswa <span style="color:#583d72;"><b>besar</b></span>.
              </td>
            </tr>
            <tr>
              <td align=center>
                R5
              </td>
              <td>
                Jika UKT <span style="color:#583d72;"><b>mahal</b></span> dan IPK <span style="color:#d35d6e;"><b>baik</b></span>, maka beasiswa <span style="color:#583d72;"><b>besar</b></span>.
              </td>
            </tr>
            <tr>
              <td align=center>
                R6
              </td>
              <td>
                Jika UKT <span style="color:#583d72;"><b>mahal</b></span> dan IPK <span style="color:#583d72;"><b>sangat baik</b></span>, maka beasiswa <span style="color:#583d72;"><b>besar</b></span>.
              </td>
            </tr>
          </table>
        <center>
      </div>
      <hr>

    </div>

<div class="modal fade" id="modal-hitung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hitung Besar Beasiswa</h4>
            </div>
            <div class="modal-body" id="body-detail">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label>UKT</label>
                            <input id="ukt" required type="number" min="0" step="50000"
                            placeholder="Masukkan UKT" name="ukt" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>IPK</label>
                            <input id="ipk" required type="number" min="3" max="4" step="0.01" name="ipk" value="" 
                            placeholder="Minimal 3,00" class="form-control">
                        </div>
                        <center>
                            <button class="btn btn-primary" id="hitung">Hitung Beasiswa</button>
                        </center>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-outline btn-default" data-dismiss="modal" style="background-color:#f05454; color:white;">Tutup</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Besar Beasiswa yang Diperoleh</h4>
            </div>
            <div class="modal-body" id="hasil-detail">
                
            </div>
            <div class="modal-footer">
                <button type="button" data-target="#modal-hitung" data-toggle="modal" class="btn  btn-outline btn-success" data-dismiss="modal">Hitung Lagi</button>
                <button type="button" class="btn  btn-outline btn-default" data-dismiss="modal" style="background-color:#f05454; color:white;">Tutup</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <img id="img-detail" src="" width="100%" class="img-responsive">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-outline btn-default" data-dismiss="modal" style="background-color:#f05454; color:white;">Tutup</button>
            </div>
        </div>
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $("#hitung").on('click', function(){
              if($("#ukt").val() && $("#ipk").val()){
                  $.post('src/hitung.php', {ukt:$("#ukt").val(), ipk:$("#ipk").val()}, function(respon){
                      $("#modal-hitung").modal('hide');
                      $("#hasil-detail").html(respon);
                      $("#modal-hasil").modal('show');
                  })
              }
            })


            $("#modal-hitung").on("shown.bs.modal", function(){
                $("#ukt").val('');
                $("#ipk").val('');
            })

            $("#modal-image").on("shown.bs.modal", function(e){
                $btn = e.relatedTarget;
                $("#img-detail").attr('src' , $($btn).data('src'));
            })
        })
    </script>
  </body>
</html>
