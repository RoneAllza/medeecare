@extends('layouts.homepage.layout')

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

    h1 {
        text-align: center;
    }

    h2 {
        text-align: center;
    }

    h3 {
        text-align: left;
    }

    h6 {
        text-align: center;
    }
</style>
@section('content')

<h2 class="py-4" style="color: rgb(0, 0, 0);"><b>Kulit yang Sehat Berawal dari Kulit Bersih Terawat</b></h2>
<p class="py-1" style="text-align:center">Masalah kulit terjadi pada siapa saja. Banyaknya produk perawatan kulit dapat membingungkan dan mungkin tidak cocok bagi sebagian orang.</p>
<p style="text-align:center">Cek halaman ini sekarang untuk mencari perawatan yang sesuai dengan kondisi kulitmu!</p>
<img src="https://static.vecteezy.com/system/resources/previews/006/310/485/non_2x/skin-care-concept-african-american-woman-is-using-cream-under-the-eyes-to-remove-circles-under-your-eyes-before-and-after-using-cream-flat-cartoon-character-illustration-free-vector.jpg" class="card-img-top" style="max-width: 35%;display: block; margin: 0 auto;">
<p class="py-1">
    <hr>

<h3 class="py-4" style="margin-top:1rem;color: rgb(0, 0, 0);text-align:center"><b>Pilih kategori yang sesuai dengan kondisi kulitmu</b></h3>

<div class="container">
    <div class="row">
        <!-- Baris pertama dengan tiga kartu -->
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 50rempx; text-align:center">
                <div class="card-body">
                    <h4 class="card-title" style="color: rgb(0, 0, 0);">Jerawat</h4>
                </div>
                <p style="text-align:center">Jerawat adalah penyumbatan minyak dan sel kulit mati pada folikel rambut di kulit seperti wajah, leher, dada bagian atas, dan punggung. Gunakan produk yang aman untuk kulitmu.</p>
                <div class="py-3">
                    <a href="/homepage-kesehatankulit/artikel" class="btn btn-info">Baca artikel sekarang</a>
                    <a href="/homepage-kesehatankulit/obat-kulit" class="btn btn-outline-info">Rekomendasi obat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card" style="width: 50rempx; text-align:center">
                <div class="card-body">
                    <h4 class="card-title" style="color: rgb(0, 0, 0);">Dermatitis & Eksem</h4>
                </div>
                <p style="text-align:center">Dermatitis dan Eksem adalah peradangan kulit yang ditandai dengan ruam merah. Kondisi ini membuat kulit mengeluarkan cairan, bengkak, gatal, dan bersisik. Kenakan pakaian berbahan lembut dan menyerap.</p>
                <div class="py-3">
                    <a href="/homepage-kesehatankulit/artikel" class="btn btn-info">Baca artikel sekarang</a>
                    <a href="/homepage-kesehatankulit/obat-kulit" class="btn btn-outline-info">Rekomendasi obat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card" style="width: 50rempx; text-align:center">
                <div class="card-body">
                    <h4 class="card-title" style="color: rgb(0, 0, 0);">Infeksi Kulit</h4>
                </div>
                <p style="text-align:center">Kulit dapat mendukung penampilan. Akan tetapi, lingkungan yang kotor bisa membuat kulit terkena infeksi seperti bakteri, jamur, dan virus. Kondisi ini dapat disembuhkan dengan pengobatan yang tepat.</p>
                <div class="py-3">
                    <a href="/homepage-kesehatankulit/artikel" class="btn btn-info">Baca artikel sekarang</a>
                    <a href="/homepage-kesehatankulit/obat-kulit" class="btn btn-outline-info">Rekomendasi obat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Baris kedua dengan dua kartu -->
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 50rempx; text-align:center">
                <div class="card-body">
                    <h4 class="card-title" style="color: rgb(0, 0, 0);">Kulit Sensitif & Alergi</h4>
                </div>
                <p style="text-align:center">Kulit dapat mendukung penampilan. Akan tetapi, lingkungan yang kotor bisa membuat kulit terkena infeksi seperti bakteri, jamur, dan virus. Kondisi ini dapat disembuhkan dengan pengobatan yang tepat.</p>
                <div class="py-3">
                    <a href="/homepage-kesehatankulit/artikel" class="btn btn-info">Baca artikel sekarang</a>
                    <a href="/homepage-kesehatankulit/obat-kulit" class="btn btn-outline-info">Rekomendasi obat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card" style="width: 50rempx; text-align:center">
                <div class="card-body">
                    <h4 class="card-title" style="color: rgb(0, 0, 0);">Kecantikan & Gaya Hidup</h4>
                </div>
                <p style="text-align:center">Kulit yang sehat terawat adalah impian semua orang. Kini produk kecantikan untuk kesehatan kulit sudah dapat ditemukan dengan mudah. Bahan-bahan yang digunakan pun adalah bahan yang aman.</p>
                <div class="py-3">
                    <a href="/homepage-kesehatankulit/artikel" class="btn btn-info">Baca artikel sekarang</a>
                    <a href="/homepage-kesehatankulit/obat-kulit" class="btn btn-outline-info">Rekomendasi obat</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection