<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Post Forum</title>
    <style>
    h1 {text-align: center;}
    h2 {text-align: center;}
    h3 {text-align: left;}
    </style>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" style= "color: rgb(163, 38, 56); font-size:large;"#">medeecare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  
<form>
  <p class="py-1">
    <div class="container mt-5">
      <label for="formGroupExampleInput" class="form-label">Judul</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan judul yang menarik untuk Anda bagikan ke Forum">
</div>

    <div class="mb-3">
    <div class="container mt-5">
     <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
     <textarea class="form-control" id="formGroupExampleInput2" rows="3" placeholder="Isikan dengan pertanyaan atau pernyataan yang ingin Anda bagikan ke Forum"></textarea>
</div>


    <div class="container mt-5">
    <label for="inputState" class="form-label">Pilih Komunitas</label>
    <select id="inputState" class="form-select">
      <option value="1">Kesehatan Mental</option>
      <option value="2">Diabetes</option>
      <option value="3">Parenting</option>
      <option value="4">Kehamilan dan Anak</option>
      <option value="5">Penyakit Infeksi</option>
      <option value="6">Olahraga</option>
    </select>

  <p class="py-1">
    <div class="col-12">
    <div class="container mt-5">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Post sebagai Anonim?
      </label>
    </div>
  </div>

  <p class="py-1">
    <div class="col-12">
    <div class="mb-3 form-check">
    <button type="submit" class="btn btn-primary">Unggah ke Forum</button>
  </div>
</form>

</body>
</html>
