@extends('layouts.layout')

@section('content')
<p></P>
<style>
    /* CSS untuk merubah warna tombol dan membuat spasi ke samping */
    .btn-primary {
        background-color: #B6252A; /* Merubah warna latar belakang tombol */
        color: white; /* Merubah warna teks tombol */
        margin-right: 5px; /* Membuat spasi ke samping sebesar 20 piksel */
        margin-left: 10px;
        padding: 10px 20px; /* Mengatur padding untuk memberikan ruang di dalam tombol */
        border: none; /* Menghapus border pada tombol */
        border-radius: 5px; /* Mengatur sudut bulat pada tombol */
        text-decoration: none; /* Menghapus garis bawah pada tautan */
        display: inline-block; /* Mengatur tampilan tombol menjadi inline block */
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: red;
    }
    .card-img-top {
        width: 100%; /* Menetapkan lebar gambar menjadi 100% dari ukuran parent */
        height: 200px; /* Menetapkan tinggi gambar menjadi 200px */
        object-fit: cover; /* Mengatur agar gambar terisi seluruh area dengan proporsi aspek yang dipertahankan */
    }
    .card-text {
        font-size: 16px; /* Menetapkan ukuran font untuk teks di dalam card */
        height: 60px; /* Menetapkan tinggi untuk teks, sesuaikan dengan kebutuhan Anda */
        overflow: hidden; /* Menyembunyikan teks yang melebihi tinggi yang ditetapkan */
    }
    .card-title {
        font-size: 18px; /* Menetapkan ukuran font untuk judul */
        overflow: hidden; /* Mengatur pemangkasan teks jika melebihi batas */
        text-overflow: ellipsis; /* Menampilkan elipsis (...) jika teks dipangkas */
    }
</style>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex mx-auto mb-2" role="search">
      <input class="form-control me-2" type="search"  style="width: 500px;" placeholder="Cari artikel berdasarkan judul, kategori, topik" aria-label="Search">
      <button class="btn btn-outline-danger" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="d-flex align-items-center mb-2 container">
  <p class="text-left fw-bold" style="font-size: 1.5rem;">Topik Terkini</p> <!-- Teks di sebelah kiri dengan margin kiri tambahan -->
</div>
<div class="d-flex justify-content-center mb-5">
<button type="button" class="btn btn-outline-secondary mx-2">Kecantikan</button>
<button type="button" class="btn btn-outline-secondary mx-2">Jerawat</button>
<button type="button" class="btn btn-outline-secondary mx-2">Kehamilan</button>
<button type="button" class="btn btn-outline-secondary mx-2">Coronavirus</button>
<button type="button" class="btn btn-outline-secondary mx-2">Kolestrol</button>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3 text-left">
        <img src="https://o-cdn-cas.sirclocdn.com/parenting/images/endocrine-disruption-1.width-800.format-webp.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Perlu Tahu, Ini Fungsi Sistem Endokrin pada Tubuh Manusia</h5>
          <p class="card-text">“Sistem endokrin memiliki fungsi yang cukup vital pada tubuh. Saat sistem endokrin terganggu, beberapa ancaman kesehatan bisa menyerang tubuh.”</p>
          <a href="#" class="btn btn-primary">Baca Artikel</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-3 text-left">
        <img src="https://statik.tempo.co/data/2017/03/27/id_593637/593637_620.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ini 7 Manfaat Menggunakan Moisturizer Setiap Hari untuk Kulit </h5>
          <p class="card-text">“Menggunakan moisturizer adalah langkah penting dalam rutinitas perawatan kulit wajah. Skincare ini memberikan kelembapan ekstra yang diperlukan oleh kulit, terutama bagi pemilik kulit kering atau cenderung kering.”

</p>
          <a href="#" class="btn btn-primary">Baca Artikel</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-3 text-left">
        <img src="https://faktualnews.co/images/2022/09/DBD.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kaitan Trombositopenia dengan Demam Berdarah yang Perlu Diketahui</h5>
          <p class="card-text">"Meski bukan termasuk penyakit menular, tetap saja DBD tidak boleh dianggap sepele. Pasalnya, komplikasi DBD bisa dibilang cukup serius dan membahayakan, salah satunya adalah penurunan jumlah trombosit yang berujung pada trombositopenia."</p>
          <a href="#" class="btn btn-primary">Baca Artikel</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col mx-auto">
        <div class="card mb-3 text-left">
          <img src="https://www.honestdocs.id/system/blog_articles/main_hero_images/000/000/069/original/Saat_yang_Tepat_untuk_Hamil.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ketahui Bahaya Kehamilan yang Terlalu Dekat bagi Kesehatan</h5>
            <p class="card-text">“Jika seorang wanita mengalami kehamilan yang terlalu dekat jaraknya antara satu dengan yang lain, ada risiko kesehatan yang bisa terjadi pada ibu maupun bayi. Ini bisa terjadi karena tubuh ibu belum kembali siap menghadapi kehamilan berikutnya.”

</p>
            <a href="#" class="btn btn-primary">Baca Artikel</a>
          </div>
        </div>
      </div>
      <div class="col mx-auto">
        <div class="card mb-3 text-left">
          <img src="https://vietnaminsider.vn/wp-content/uploads/2021/05/covid-19-13.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Begini Kronologi Lengkap Virus Corona Masuk Indonesia </h5>
            <p class="card-text">“Awal mula virus corona masuk Indonesia adalah dari sebuah pesta dansa. Di mana dua warga Depok melakukan kontak dekat dengan orang Jepang yang terinfeksi.”</p>
            <a href="#" class="btn btn-primary">Baca Artikel</a>
          </div>
        </div>
      </div>
      <div class="col mx-auto">
        <div class="card mb-3 text-left">
          <img src="https://berkeluarga.id/media/2020/06/01-772-1200x675.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">5 Manfaat Rutin Konsumsi Buah Nanas untuk Kolesterol</h5>
            <p class="card-text">“Ada beragam manfaat buah nanas bagi tubuh bila dikonsumsi secara rutin. Contohnya, menjaga kadar kolesterol, menyehatkan jantung, hingga menurunkan kadar trigliserida.”

</p>
            <a href="#" class="btn btn-primary">Baca Artikel</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection
