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
     h2 {text-align: center;}
     .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
     .question {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom untuk 4 option */
            gap: 10px;
            align-items: center; /* Mengatur opsi jawaban ke tengah */
            margin-bottom: 20px;
      }
      .question label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            grid-column: span 4; /* Mengatur label memanjang ke 4 kolom */
        }
        .option-card {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            text-align: center; /* Mengatur teks ke tengah */
        }
        .option-card label {
            font-weight: normal; /* Changed from bold to normal */
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" style= "color: rgb(163, 38, 56); font-size:large;"#">medeecare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          </div>
        </div>
      </nav>

    <h2 class="py-3" style="color: rgb(178, 44, 44);"> <b>Kenali Gejala Covid-19 dari Sekarang!</b></h2>
    <h5 class="text-muted" style="text-align:center"> Cek indikasi covid-19 mu bersama Medeecare.</h5>

    <div class="container">
      <div class="card">
      <form method="GET" action="{{ route('covid.result') }}">
      <div class="question">
              <label for="question1">Frekuensi batuk dalam kurun waktu 5 menit</label>
                  <div class="option-card">
                      <input type="radio" id="question1_option1" name="question1" value="0">
                      <label for="question1_option1">Kurang dari 1 kali</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question1_option2" name="question1" value="1">
                      <label for="question1_option2">1 sampai 10 kali</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question1_option3" name="question1" value="2">
                      <label for="question1_option3">10 sampai 20 kali</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question1_option4" name="question1" value="3">
                      <label for="question1_option4">Lebih dari 20 kali</label>
                  </div>
              </div>
              <div class="question">
                  <label for="question2">Kesulitan saat menelan</label>
                  <div class="option-card">
                      <input type="radio" id="question2_option1" name="question2" value="0">
                      <label for="question2_option1">Tidak</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question2_option2" name="question2" value="1">
                      <label for="question2_option2">Kadang-kadang</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question2_option3" name="question2" value="2">
                      <label for="question2_option3">Ya</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question2_option4" name="question2" value="3">
                      <label for="question2_option4">Terasa sakit saat menelan</label>
                  </div>
              </div>
              <div class="question">
                  <label for="question3">Fungsionalitas indra perasa dan penciuman selama seminggu terakhir</label>
                  <div class="option-card">
                      <input type="radio" id="question3_option1" name="question3" value="0">
                      <label for="question3_option1">Indra perasa(lidah) dan indra pembau(hidung) berfungsi dengan baik</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question3_option2" name="question3" value="1">
                      <label for="question3_option2">Indra perasa(lidah) berfungsi dengan baik, namun indra pembau(hidung) tidak</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question3_option3" name="question3" value="2">
                      <label for="question3_option3">Indra pembau(hidung) berfungsi dengan baik, namun indra perasa(lidah) tidak</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question3_option4" name="question3" value="3">
                      <label for="question3_option4">Indra perasa(lidah) dan indra pembau(hidung) tidak berfungsi dengan baik</label>
                  </div>
              </div>
              <div class="question">
                  <label for="question4">Frekuensi demam selama seminggu terakhir</label>
                  <div class="option-card">
                      <input type="radio" id="question4_option1" name="question4" value="0">
                      <label for="question4_option1">Tidak pernah</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question4_option2" name="question4" value="1">
                      <label for="question4_option2">1-2 hari</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question4_option3" name="question4" value="2">
                      <label for="question4_option3">3-5 hari</label>
                  </div>
                  <div class="option-card">
                      <input type="radio" id="question4_option4" name="question4" value="3">
                      <label for="question4_option4">Lebih dari 5 hari</label>
                  </div>
              </div>
            </div>

              <button type="submit" style="background-color: #8B0C0C;">Submit</button>
          </form>
</html>
