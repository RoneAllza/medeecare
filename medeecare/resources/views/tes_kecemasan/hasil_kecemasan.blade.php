@extends('layouts.homepage.layout')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif; /* Gunakan font Arial atau font sans-serif */
        color: #333; /* Warna teks */
        background-color: #f8f9fa; /* Background putih keabu-abuan */
    }

    .container {
        max-width: 700px; /* Lebar maksimum kontainer */
        margin: auto; /* Posisi tengah */
        padding: 30px; /* Padding kontainer */
        background-color: #FFFFFF; /* Background putih */
        border-radius: 10px; /* Sudut bulatan */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        margin-top: 20px; /* Jarak atas dari konten */
    }

    h2 {
        color: #800000; /* Warna abu-abu tua */
        margin-bottom: 20px; /* Jarak bawah dari judul */
    }

    .table {
        width: 100%; /* Lebar tabel 100% */
        border-collapse: collapse; /* Collapse border */
    }

    .table th, .table td {
        border: 1px solid #dee2e6; /* Border tipis */
        padding: 8px; /* Padding sel */
        text-align: left; /* Teks rata kiri */
    }

    .table th {
        background-color: #151515; /* Warna abu-abu tua */
        color: #FFFFFF; /* Warna teks putih */
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Warna abu-abu muda untuk baris genap */
    }

    .btn-info {
        background-color: #A91D3A; /* Warna biru */
        border-color: #A91D3A; /* Warna border biru */
        color: #FFFFFF; /* Warna teks putih */
        padding: 6px 12px; /* Padding tombol */
        font-size: 14px; /* Besar font */
        border-radius: 5px; /* Sudut bulatan */
        transition: background-color 0.3s ease; /* Animasi perubahan warna tombol */
    }

    .btn-info:hover {
        background-color: #C73659; /* Warna biru yang sedikit lebih gelap saat hover */
        border-color: #C73659; /* Warna border biru saat hover */
    }

    /* Style untuk kolom tombol */
    .action-column {
        width: 120px; /* Lebar kolom */
        text-align: center; /* Teks rata tengah */
    }
</style>

<div class="container">
    <h2>Tabel Hasil Tes Kecemasan Kamu :</h2>
    <a href="{{ route('tes-kecemasan.index') }}" class="btn btn-info">Ambil Tes Lagi</a> <!-- Tombol Ambil Tes Lagi -->
    <h2>     </h2>
    <table class="table">
        <thead>
            <tr>
                <!-- <th>ID Tes</th> -->
                <th>Skor Hasil</th>
                <th>Hasil</th>
                <th>Tanggal Submit</th>
                <th class="action-column">Action</th> <!-- Tambahkan class untuk kolom aksi -->
            </tr>
        </thead>
        <tbody>
            @foreach ($hasilTes as $hasil)
                <tr>
                    <!-- <td>{{ $hasil->id_tes }}</td> -->
                    <td>{{ $hasil->skor_hasil }}</td>
                    <td>{{ $hasil->deskripsi_hasil }}</td>
                    <td>{{ $hasil->updated_at->setTimezone('Asia/Jakarta')->format('d M Y H:i:s') }}</td> <!-- Format waktu dengan WIB -->
                    <td class="action-column">
                        <a href="{{ route('hasil-tes-kecemasan.show', $hasil->id) }}" class="btn btn-info">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
