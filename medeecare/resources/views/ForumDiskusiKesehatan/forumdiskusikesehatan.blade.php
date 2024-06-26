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
    
    <h2 class="py-3" style="color: rgb(0, 0, 0);"> <b>Temukan Komunitas Anda!</b></h2>
    <p class="py-1" style="margin-top:1rem;text-align:center"> Jelajahi berbagai jenis komunitas yang ada dan paling sesuai dengan kondisi kesehatan yang Anda hadapi</p>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-4 mb-3">
      <p class="py-1">
      <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://static.vecteezy.com/system/resources/previews/000/385/135/original/people-with-mental-health-concept-illustration-vector.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Kesehatan Mental</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                    <div class="flex-item">
                        <h6 class="font-bold">14</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">5.9k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">26k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/mental" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>
  
  <div class="col-4 mb-3">
    <p class="py-1">
    <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://static.vecteezy.com/system/resources/previews/003/050/902/large_2x/medical-diagnosis-diabetes-diabetes-mellitus-type-2-and-insulin-vector.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Diabetes</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                     <div class="flex-item">
                        <h6 class="font-bold">10</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">6k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">20k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/diabetes" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>

  <div class="col-4 mb-3">
  <p class="py-1">
    <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://image.freepik.com/free-vector/parents-preparing-cute-daughter-school-love-study-backpack-flat-illustration-cartoon-illustration_74855-14475.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Parenting</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                    <div class="flex-item">
                       <h6 class="font-bold">11</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">13k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">

                        <h6 class="font-bold">21k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/parenting" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>

  <div class="col-4 mb-3">
    <p class="py-1">
        <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://static.vecteezy.com/system/resources/previews/000/518/117/original/pregnant-woman-concept-vector-illustration-in-cute-cartoon-style-health-care-pregnancy.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Kehamilan dan Anak</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                    <div class="flex-item">
                        <h6 class="font-bold">23</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">19k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">33k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/pregnancy" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>
           
  <div class="col-4 mb-3">
    <p class="py-1">
    <div class="card" style="width: 20rem; length: 10rem">
          <img src="https://static.vecteezy.com/system/resources/previews/000/570/587/original/vector-sick-man-having-a-cold-sit-in-the-room.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Penyakit Infeksi</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                    <div class="flex-item">
                        <h6 class="font-bold">8</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">2.6k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">17k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/infection" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>
 
<div class="col-4 mb-3">
    <p class="py-1">
        <div class="card mb-3 text-left" style="width: 20rem; length: 10rem">
          <img src="https://media.suara.com/pictures/970x544/2022/02/03/54704-ilustrasi-animasi-olahraga.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" style="color: rgb(0, 0, 0);">Olahraga</h4>
            <p class="py-1">
            <div class="flex justify-center">
            <div class="flex-container">
                    <div class="flex-item">
                        <h6 class="font-bold">9</h6>
                        <p class="font-thin">Topik</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">12k</h6>
                        <p class="font-thin">Interaksi</p>
                    </div>
    
                    <div class="flex-item">
                        <h6 class="font-bold">42k</h6>
                        <p class="font-thin">Anggota</p>
                    </div>
                </div>
                <p class="py-1">
                <a href="/homepage-forum/sport" class="btn btn-primary btn-sm">Lihat Komunitas</a>
          </div>
      </div>
  </div>
</div>

@endsection