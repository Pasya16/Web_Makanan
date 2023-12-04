<!DOCTYPE html>
<head>
  <title>MasakMakan!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #fd0c0c;
  }
  </style>
  <style>
  .font-high-tower {
  font-family: "High Tower Text", sans-serif;
  }
  </style>
  <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
<style>
    table {
        border-collapse: collapse;
        width: 45%;
        border-color: white;
    }
    table, th, td {
        border: 1px solid white; 
    }
</style>
</head>
<style>
.p1 {
  font-family: "Berlin Sans FB";
}
h1{
  font-size: 60px;
}
h2{
  font-size: 40px;
}
h3{
  font-size: 20px;
}
.p2 {
  font-family: "Gill Sans MT";
}
.p3 {
  font-family: "High Tower Text";
}
h4{
  font-size: 30px;
}
th {
  text-align: center;
}
td {
  text-align: center;
}
</style>
<body class="bg-dark text-white text-center">
<div class="p-4 bg-primary text-white text-center">
  <h1 class ="p1">&#127828; MasakMakan! &#127829;</h1>
  <h3 class ="p1" >Banyak resep makanan enak dan praktis!</h3> 
  <h3 class ="p1">Hanya di MasakMakan, Masak asik makan asik!.</h3>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="MenuSarapan.php">Makanan Berat~ &#127835;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="Cemilan.php">Cemilan~ &#127839;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="#">Minuman~ &#127865;</a>
      </li>
    </ul>
  </div>
  <form action="search.php" method="GET" class="form-inline">
  <div class="input-group">
    <input type="text" class="form-control" name="query" placeholder="Cari...">
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary">Cari</button>
    </div>
  </div>
</form>
</form>
</nav>
<h2 class ="p3">Rekomendasi Tempat makanan enak dari Masak Asik!</h2>
<body>
  <img src="nasi.jpg" width="300" height="250">
<br/>
  <h3 class ="p3">Nasi kuning Pak Rowi</h3>
  <h3 class ="p3">Alamat : Jl. Pandu No. 6A, Cicendo, Bandung</h3>
  <h3 class ="p3">Kamu lagi nyari nasi kuning dengan cita rasa yang gurih asin dan lezat?</h3>
  <h3 class ="p3">Jawabannya ada di Nasi kuning super Pak Rowi, disini nasi kuningnya bener-bener enak</h3>
  <h3 class ="p3">dan harganya murah banget lagi. Wajib kalian cobain ya!</h3>
  <a href=naskun.php>
  <h3 class ="p3">Resep Nasi Kuning dari Masak Asik!</h3>
</a>
<img src="kupattahu.jpg" width="300" height="250">
<h3 class ="p3">Kupat Tahu Singaparna Arjuna</h3>
  <h3 class ="p3">Alamat : Jl. Ibu Ganirah No 59, Cibeber, Cimahi</h3>
  <h3 class ="p3">Katanya sih ini kupat tahu paling enak secimahi lohh?!</h3>
  <h3 class ="p3">Kamu percaya ga? Makannya cobain dulu yuk baru tentuin!</h3>
  <a href=kupat.php>
  <h3 class ="p3">Resep Kupat Tahu dari Masak Asik!</h3>
</a>
<img src="gehuu.jpg" width="300" height="250">
<h3 class ="p3">Gehu pedas mg Adam</h3>
  <h3 class ="p3">Alamat : Jl. Cigugur tengah Kec. CImahi tengah, Cimahi</h3>
  <h3 class ="p3">Kata temen aku ini gehu nya enak banget loh, pedes-pedes nagih.</h3>
  <h3 class ="p3">Jadi ngiler kan? Cuss cobain.</h3>
  <a href=gehu.php>
  <h3 class ="p3">Resep Gehu dari Masak Asik!</h3>
</a>
<div class="mt-5 p-4 bg-dark text-white text-center">
  <p class="p3">Instagram : MasakMakanAsik</p>       
  <p class="p3">Twitter : MasakkEnakk</p>
  <p class="p3">Wa/telp : 0812 2324 4567</p>
</div>
</html>