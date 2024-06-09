@extends('layouts.admin.layout')

@section('content')



<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Waiting List Nomor Antrian</h3></div>

                <div class="container">
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jam Konsultasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Adi</td>
                              <td>Adi@gmail.com</td>
                              <td>13.00-13.30</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jamal</td>
                              <td>Jamal@yahoo.com</td>
                              <td>09.00-09.30</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Layla</td>
                              <td>laylalayli@yahoo.com</td>
                              <td>16.30-17.00</td>
                            </tr>
                          </tbody>
                    </table>
                    
                    <a href="/admin/tambahantrian" class="btn btn-primary float-end mt-2">Tambah Antrian</a>    
                </div>


            </div>
        </div>
    </div>
@endsection