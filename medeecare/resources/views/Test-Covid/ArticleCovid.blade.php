@extends('layouts.homepage.layout')

@section('content')
    <style>
       .flex-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 20px;
        }
        .flex-item {
            text-align: center;
        }
    h1 {text-align: center;}
    h2 {text-align: center;}
    h3 {text-align: left;}
    </style>
    
    <h2 class="py-3" style="color: rgb(200, 0, 0);"> <b>Cegah Covid di Masa Pasca-Pandemi!</b></h2>
    <p class="py-1" style="margin-top:1rem;text-align:center"> Simak artikel berikut untuk mendapatkan insight terbaru terkait penanganan Covid dari Medeecare.</p>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-4 mb-3">
      <p class="py-1">
      <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://asset.indosport.com/article/image/q/80/274336/memilih_waktu_olahraga-169.jpg?w=750&h=423" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">5 Olahraga ringan yang dapat mencegah Covid-19, Lakukan Setiap Hari!</h4>
            <p class="py-1 text-secondary"> 02 Mei 2024.</p>
            
            <div class="flex justify-center">
            <div class="flex-container">
                    <p>Olahraga untuk menjaga dan meningkatkan daya tahan tubuh mencegah Covid-19 ini bisa dilakukan di rumah. Bahkan, jika Anda malas keluar kamar, juga bisa melakukan olahraga untuk menjaga dan meningkatkan daya tahan tubuh untuk mencegah Covid-19 ini..</p>
                </div>
                <p class="py-1">
              <button type="button" href="https://dashboardcovid19.kemkes.go.id/">Baca Selengkapnya</button>
            </div>
    </div>
    </div>
    </div>
    <div class="col-4 mb-3">
    <p class="py-1">
    <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://img.okezone.com/content/2021/02/24/481/2367520/5-tanda-yang-menunjukkan-sistem-kekebalan-tubuh-anda-lemah-QEKWh73wyh.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Kenali 5 Gejala Tanda Sistem Imun Tubuh Melemah. </h4>
            <p class="text-secondary">16 Januari 2024 </p>
            <div class="flex justify-center">
            <div class="flex-container">
                    <p>Kesehatan harus menjadi hal yang diutamakan. Sistem imun adalah elemen tubuh yang berperan dalam menjaga kesehatan tubuh. Untuk itu sistem imun tubuh harus dijaga. Jika..</p>
                </div>
                <p class="py-1">
                <button type="button" href="https://kesehatan.kontan.co.id/news/mudah-dilakukan-5-olahraga-ini-bisa-meningkatkan-daya-tahan-tubuh-mencegah-covid-19">Baca Selengkapnya</button>  
          </div>
      </div>
  </div>
</div>

  <div class="col-4 mb-3">
    <p class="py-1">
    <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://asset.kompas.com/crops/NXKR-0a88ZFp76yuKRufNezApJw=/0x0:1013x675/750x500/data/photo/2023/06/22/6493e13143a9f.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Tren Kasus Covid-19 Sepanjang Tahun 2023</h4>
            <p class="text-secondary"> 5 Desember 2023 </p>
            <div class="flex justify-center">
            <div class="flex-container">
                <p>Kasus penularan COVID-19 di Indonesia pada Desember 2023 dikabarkan melonjak. Lonjakan kasus COVID-19 di dalam...</p>
                <p class="py-1">
                <button type="button">Baca Selengkapnya</button> 
          </div>
      </div>
  </div>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav
@endsection