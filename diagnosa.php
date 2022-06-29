<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Seog Responsive web template, Bootstrap Web Templates" />
  <title>Diagnosa</title>
  <link rel='icon' href='assets/images/favicon.ico' type='image/x-icon' sizes="16x16" />
  <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo-temuin.png" alt="Your logo" title="Your logo" />
          </a>
        </nav>
      </div>
    </header>
    <!-- //header -->
  </div>
  <div class="w3l-banner-content">
      <div class="container">
  <?php
    include_once("../temuin/connection.php");
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $pilihancardAgama = $_POST['pilihancardAgama'];
        $pilihancardUmur = $_POST['pilihancardUmur'];
        $pilihancardLingkungan = $_POST['pilihancardLingkungan'];
        $pilihancard1 = $_POST['pilihancard1'];
        $pilihancard2 = $_POST['pilihancard2'];
        $pilihancard3 = $_POST['pilihancard3'];
        $pilihancard4 = $_POST['pilihancard4'];
        $pilihancard5 = $_POST['pilihancard5'];
        $pilihancard6 = $_POST['pilihancard6'];
        $pilihancard7 = $_POST['pilihancard7'];
        $pilihancard8 = $_POST['pilihancard8'];
        $pilihancard9 = $_POST['pilihancard9'];
        $pilihancard10 = $_POST['pilihancard10'];

        $query = mysqli_query($conn, "INSERT INTO temuin VALUES(NULL,'$nama','$pilihancardAgama','$pilihancardUmur','$pilihancardLingkungan','$pilihancard1','$pilihancard2','$pilihancard3','$pilihancard4','$pilihancard5','$pilihancard6','$pilihancard7','$pilihancard8','$pilihancard9','$pilihancard10')");

        $skor = (int)$pilihancard1 + (int)$pilihancard2 + (int)$pilihancard3 + (int)$pilihancard4 + (int)$pilihancard5 + (int)$pilihancard6 + (int)$pilihancard7 + (int)$pilihancard8 + (int)$pilihancard9 + (int)$pilihancard10;

        $hasil = "";
        $detail = "";

        if($skor <= 13) {
          $hasil = "Stress Ringan";
          $detail = "Stres berat merupakan situasi kronis yang dapat berlangsung beberapa
minggu sampai beberapa tahun yang berisiko tinggi terhadap kesehatan seseorang, seperti perselisihan perkawinan secara terus menerus, kesulitan ekonomi yang berkepanjangan, maupun penyakit fisik jangka panjang";
        } else if($skor <=26) {
          $hasil = "Stress Sedang";
          $detail = "Stres sedang merupakan stresor yang dihadapi seseorang yang berlangsung beberapa jam sampai beberapa hari, misalnya perselisihan dengan rekan kerja yang tidak terselesaikan, anak yang sakit, maupun ketidakhadiran anggota keluarga dalam waktu yang lama";
        } else if($skor <=40) {
          $hasil = "Stress Berat";
          $detail = "Stres berat merupakan situasi kronis yang dapat berlangsung beberapa
minggu sampai beberapa tahun yang berisiko tinggi terhadap kesehatan seseorang, seperti perselisihan perkawinan secara terus menerus, kesulitan ekonomi yang berkepanjangan, maupun penyakit fisik jangka panjang";
        }
?>
      <div class="row mt-5 mx-3">
          <div class="col-12">
            <div class="card shadow p-2 mb-5 bg-body rounded">
              <div class=" card-body">
                <h5 class="card-title">Hasil</h5>
                <hr>
                <b><?=$hasil?></b>
                <br>
                <?=$detail ?>
                </div>
                <div class="card-footer">
                  Untuk layanan terapi stress <a href=""><span class="w3sub-color"> Klik Disini</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
    } else {
?>
    <!-- Data diri -->
        <form action="" method="POST">
        <div class="row mt-3 mx-3">
          <div class="col-12">
            <div class="card shadow p-2 mb-5 bg-body rounded">
              <div class=" card-body">
                <h5 class="card-title">Masukkan Data Diri kamu</h5>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2"></h6>
                <div class="d-grid gap-2">
                  <!-- Nama -->
                  <label for="nama">Nama :</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                  <!-- Jenis Kelamin -->
                  <!-- <label for="jenis-kelamin" class="pt-2">Jenis Kelamin :</label>
                  <input type="radio" class="btn-check" name="pilihancardJk" id="lakiLaki" autocomplete="off"
                    value="Laki-Laki">
                  <label class="btn btn-outline-success" for="lakiLaki">Laki - Laki</label>
                  <input type="radio" class="btn-check" name="pilihancardJk" id="perempuan" autocomplete="off"
                    value="Perempuan">
                  <label class="btn btn-outline-success" for="perempuan">Perempuan</label> -->
                  <!-- Agama -->
                  <label for="agama">Agama :</label>
                  <input type="radio" class="btn-check" name="pilihancardAgama" id="islam" autocomplete="off"
                    value="Islam">
                  <label class="btn btn-outline-success" for="islam">Islam</label>
                  <input type="radio" class="btn-check" name="pilihancardAgama" id="kristen" autocomplete="off"
                    value="Kristen">
                  <label class="btn btn-outline-success" for="kristen">Kristen</label>
                  <!-- Umur -->
                  <label for="umur">Umur :</label>
                  <input type="radio" class="btn-check" name="pilihancardUmur" id="umur1" autocomplete="off"
                    value="60-66">
                  <label class="btn btn-outline-success" for="umur1">60 - 66</label>
                  <input type="radio" class="btn-check" name="pilihancardUmur" id="umur2" autocomplete="off"
                    value="67-70">
                  <label class="btn btn-outline-success" for="umur2">67 - 70</label>
                  <input type="radio" class="btn-check" name="pilihancardUmur" id="umur3" autocomplete="off"
                    value="71-75">
                  <label class="btn btn-outline-success" for="umur3">71 - 75</label>
                  <!-- Lingkungan -->
                  <label for="lingkungan">Lingkungan :</label>
                  <input type="radio" class="btn-check" name="pilihancardLingkungan" id="tenang" autocomplete="off"
                    value="tenang">
                  <label class="btn btn-outline-success" for="tenang">Tenang</label>
                  <input type="radio" class="btn-check" name="pilihancardLingkungan" id="bising" autocomplete="off"
                    value="bising">
                  <label class="btn btn-outline-success" for="bising">Bising</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Data Diri -->

        <!-- Pertanyaan Diagnosa -->
        <div class="row mt-3 mx-3 ">
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda marah karena sesuatu yang
                  tidak terduga</p><br>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 1 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard1" id="card1p1" autocomplete="off" value="1"
                    required>
                  <label class="btn btn-outline-success" for="card1p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard1" id="card1p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card1p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard1" id="card1p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card1p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard1" id="card1p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card1p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard1" id="card1p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card1p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasa tidak mampu
                  mengontrol hal-hal penting dalam kehidupan anda</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 2 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard2" id="card2p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card2p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard2" id="card2p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card2p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard2" id="card2p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card2p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard2" id="card2p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card2p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard2" id="card2p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card2p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3 mx-3">
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body round fw-boldered">
              <div class=" card-body">
                <p class="card-title">Selama sebulan terakhir, seberapa sering anda merasa gelisah dan tertekan</p><br>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 3 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard3" id="card3p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card3p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard3" id="card3p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card3p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard3" id="card3p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card3p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard3" id="card3p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card3p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard3" id="card3p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card3p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasa yakin terhadap
                  kemampuan diri untuk mengatasi masalah pribadi</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 4 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard4" id="card4p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card4p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard4" id="card4p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card4p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard4" id="card4p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card4p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard4" id="card4p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card4p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard4" id="card4p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card4p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3 mx-3">
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasa segala sesuatu yang
                  terjadi sesuai dengan harapan anda</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 5 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard5" id="card5p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card5p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard5" id="card5p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card5p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard5" id="card5p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card5p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard5" id="card5p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card5p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard5" id="card5p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card5p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 30rem;">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasa tidak mampu
                  menyelesaikan hal-hal yang harus dikerjakan</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 6 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard6" id="card6p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card6p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard6" id="card6p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card6p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard6" id="card6p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card6p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard6" id="card6p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card6p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard6" id="card6p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card6p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3 mx-3">
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda mampu mengontrol rasa
                  mudah tersinggung dalam kehidupan anda</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 7 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard7" id="card7p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card7p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard7" id="card7p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card7p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard7" id="card7p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card7p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard7" id="card7p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card7p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard7" id="card7p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card7p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasa lebih mampu
                  mengatasi masalah jika dibandingkan dengan orang lain</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 8 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard8" id="card8p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card8p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard8" id="card8p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card8p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard8" id="card8p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card8p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard8" id="card8p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card8p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard8" id="card8p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card8p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3 mx-3">
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda marah karena adanya
                  masalah yang tidak dapat anda kendalikan</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 9 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard9" id="card9p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card9p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard9" id="card9p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card9p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard9" id="card9p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card9p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard9" id="card9p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card9p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard9" id="card9p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card9p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class=" card-body">
                <p class="card-title fw-bolder">Selama sebulan terakhir, seberapa sering anda merasakan kesulitan yang
                  menumpuk sehingga anda tidak mampu untuk mengatasinya</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted pb-2 blockquote-footer">Pertanyaan 10 dari 10</h6>
                <div class="d-grid gap-2">
                  <input type="radio" class="btn-check" name="pilihancard10" id="card10p1" autocomplete="off" value="1">
                  <label class="btn btn-outline-success" for="card10p1">Tidak Pernah</label>
                  <input type="radio" class="btn-check" name="pilihancard10" id="card10p2" autocomplete="off" value="2">
                  <label class="btn btn-outline-success" for="card10p2">Sangat jarang (1-2x)</label>
                  <input type="radio" class="btn-check" name="pilihancard10" id="card10p3" autocomplete="off" value="3">
                  <label class="btn btn-outline-success" for="card10p3">Jarang(3-4x)</label>
                  <input type="radio" class="btn-check" name="pilihancard10" id="card10p4" autocomplete="off" value="4">
                  <label class="btn btn-outline-success" for="card10p4">Sering (5-6x)</label>
                  <input type="radio" class="btn-check" name="pilihancard10" id="card10p5" autocomplete="off" value="5">
                  <label class="btn btn-outline-success" for="card10p5">Sangat sering (>6x)</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row pb-5 mx-3">
          <div class="col-12">
            <button class="btn btn-block btn-success" name="submit" value="submit" type="submit">Submit</button>
          </div>
        </div>
      </div>
    <!-- End Pertanyaan Diagnosa -->
  </form>

  <!-- Button Scroll Up -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    // navbar active
    var header = document.getElementById("navItem");
    var btns = header.getElementsByClassName("nav-item");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
    }
?>