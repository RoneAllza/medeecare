<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEK STRESS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">medeecare | Cek Stress</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="hasil.php" method="POST">
                    <div class="form-group">
                        <br><label for="question">Jawablah pertanyaan dibawah ini sesuai dengan keadaan yang Kamu rasakan saat ini!</label><br>
                        <br><label for="question1">1. Seberapa sering kamu merasa kesal karena sesuatu terjadi secara tidak terduga?</label></br>
                        <input type="radio" id="tidak pernah" name="question1" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question1" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question1" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question1" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question1" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question2">2. Apakah kamu mudah merasa marah ketika menghadapi situasi yang tidak sesuai harapan?</label></br>
                        <input type="radio" id="tidak pernah" name="question2" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question2" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question2" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question2" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question2" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>
        
                        <br><label for="question3">3. Seberapa sering kamu merasa tertekan oleh tuntutan pekerjaan atau tugas-tugas sehari-hari?</label></br>
                        <input type="radio" id="tidak pernah" name="question3" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question3" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question3" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question3" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question3" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question4">4. Apakah kamu merasa cemas ketika menghadapi situasi yang tidak dapat kamu kendalikan?</label></br>
                        <input type="radio" id="tidak pernah" name="question4" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question4" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question4" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question4" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question4" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question5">5. Seberapa sering kamu merasa sulit untuk tidur karena pikiran yang terus-menerus memikirkan masalah?</label></br>
                        <input type="radio" id="tidak pernah" name="question5" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question5" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question5" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question5" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question5" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>
            
                        <br><label for="question6">6. Apakah kamu sering merasa tegang atau gelisah tanpa alasan yang jelas?</label></br>
                        <input type="radio" id="tidak pernah" name="question6" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question6" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question6" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question6" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question6" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question7">7. Seberapa sering kamu merasa sulit untuk berkonsentrasi karena pikiran yang terganggu oleh stres?</label></br>
                        <input type="radio" id="tidak pernah" name="question7" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question7" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question7" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question7" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question7" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question8">8. Apakah kamu sering merasa lelah atau kelelahan secara emosional akibat tekanan hidup?</label></br>
                        <input type="radio" id="tidak pernah" name="question8" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question8" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question8" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question8" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question8" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question9">9. Seberapa sering kamu merasa tidak mampu mengatasi tugas-tugas yang kamu hadapi?</label></br>
                        <input type="radio" id="tidak pernah" name="question9" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question9" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question9" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question9" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question9" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>

                        <br><label for="question10">10. Apakah kamu merasa kehilangan minat atau kegembiraan dalam aktivitas yang biasanya kamu nikmati?</label></br>
                        <input type="radio" id="tidak pernah" name="question10" value="Tidak Pernah" required>
                        <label for="tidak pernah">Tidak Pernah</label><br>
                        <input type="radio" id="jarang" name="question10" value="Jarang">
                        <label for="jarang">Jarang</label><br>
                        <input type="radio" id="kadang-kadang" name="question10" value="Kadang-Kadang">
                        <label for="kadang-kadang">Kadang-Kadang</label><br>
                        <input type="radio" id="cukup sering" name="question10" value="Cukup Sering">
                        <label for="cukup sering">Cukup Sering</label><br>
                        <input type="radio" id="sangat sering" name="question10" value="Sangat Sering">
                        <label for="sangat sering">Sangat Sering</label><br>
                    </div>

                    <button type="submit" class="btn btn-maroon">Submit Hasil</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
