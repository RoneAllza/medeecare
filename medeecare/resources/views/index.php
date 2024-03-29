<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEK STRESS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-laki-laki {
            background-color: blue;
            color: white;
        }
        
        .btn-perempuan {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">medeecare | Cek Stress</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="pertanyaan_cekstress.php" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="gender">Apa Jenis Kelamin Kamu?</label><br>
                        <button type="button" >Laki-Laki</button>
                        <button type="button" >Perempuan</button>
                    </div>
                    <div class="form-group">
                        <label for="age">Berapa Usia Kamu?</label><br>
                        <input list="usia" class="form-control">
                        <datalist id="usia">
                            <option value="< 20 Tahun">
                            <option value="21 - 25 Tahun">
                            <option value="26 - 30 Tahun">
                            <option value="31 - 35 Tahun">
                            <option value="> 35 Tahun">
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Apakah Kamu Memiliki Diagnosis Kesehatan?</label><br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="asma" name="diagnosis" value="Asma">
                            <label class="form-check-label" for="asma">Asma</label><br>
                            <input type="checkbox" class="form-check-input" id="jantung" name="diagnosis" value="jantung">
                            <label class="form-check-label" for="jantung">Jantung</label><br>
                            <input type="checkbox" class="form-check-input" id="obesitas" name="diagnosis" value="obesitas">
                            <label class="form-check-label" for="obesitas">Obesitas</label><br>
                            <input type="checkbox" class="form-check-input" id="diabetes" name="diagnosis" value="diabetes">
                            <label class="form-check-label" for="diabetes">Diabetes</label><br>
                            <input type="checkbox" class="form-check-input" id="lainnya" name="diagnosis" value="lainnya">
                            <label class="form-check-label" for="lainnya">Lainnya</label><br>
                        </div>
                    </div>    
                <button type="submit" class="btn btn-maroon">Lanjut</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
