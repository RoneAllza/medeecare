<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Form Rujukan RS</title>
    <style>
     h2 {text-align: center;}
     .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
    </style>
    
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a href="/" class="navbar-brand" style= "color: rgb(163, 38, 56); font-size:large;">medeecare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          </div>
        </div>
      </nav>

    <h2 class="py-3" style="color: rgb(10, 134, 236);"> <b>Buat Surat Rujukan Sakitmu Tanpa Perlu ke Klinik yuk!</b></h2>
    <h5 class="text-muted" style="text-align:center"> Buat surat rujukan tanpa ribet bersama Medeecare.</h5>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-3">
                        Rekomendasi Rumah Sakit Sekitar Telkom University.
                    </h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <div class="card" >
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_667,h_431,c_fill,dpr_2.0/v1702888712/hospital_image/Oetomo-Hospital-Bandung-0fcc065e-cac5-4742-9416-75061f405369.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Oetomo Hospital Bandung, Jl Raya Bojongsoang no. 156, Lengkong, Kabupaten Bandung.</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" >
                        <img src="https://th.bing.com/th/id/OIP.09Id9pqLsyroskn2XpQrvwAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Mayapada Hospital Bandung, Jl Terusan Buahbatu no.5, Kota Bandung.</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" >
                        <img src="https://rsbinasehat.co.id/wp-content/uploads/2020/09/prb-800x445.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Rumah Sakit Umum Bina Sehat, Jl Raya Dayeuhkolot no. 325, Citereup, Kabupaten Bandung.</p>
                        </div>
                      </div>
                </div>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" required>
                <option selected>Pilih Rumah Sakit Tujuan</option>
                <option value="1">Oetomo Hospital (Operasional : 24 jam)</option>
                <option value="2">Mayapada Hospital (Operasional : 24 jam)</option>
                <option value="3">Rumah Sakit Umum Bina Sehat (Operasional : 08.00 - 20.00 WIB)</option>
              </select>
            <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                      <input class="form-control" id="exampleInputName" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Riwayat Penyakit</label>
                        <input class="form-control" id="exampleInputName2" >
                        
                    </div>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Keperluan Rujukan (wajib isi salah satu)</option>
                        <option value="1">Penanganan Spesialis</option>
                        <option value="2">Pemeriksaan Lanjutan</option>
                        <option value="3">Rawat Inap/Operasi</option>
                      </select>
                    <a href="/Rujukrs/submit" style='color:#07d6be'>
                        Submit Form
                    </a>
                    
            </form>
            
        </div>
    </section>
        
  