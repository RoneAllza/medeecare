<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Gangguan Kecemasan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1, p {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            form.addEventListener("submit", function(event) {
                const questions = document.querySelectorAll(".question");
                let allAnswered = true;
                questions.forEach(question => {
                    if (!Array.from(question.querySelectorAll("input[type='radio']")).some(radio => radio.checked)) {
                        allAnswered = false;
                    }
                });
                if (!allAnswered) {
                    event.preventDefault();
                    const errorBar = document.createElement("div");
                    errorBar.style.position = "fixed";
                    errorBar.style.left = "0";
                    errorBar.style.bottom = "0";
                    errorBar.style.width = "100%";
                    errorBar.style.backgroundColor = "red";
                    errorBar.style.color = "white";
                    errorBar.style.textAlign = "center";
                    errorBar.style.padding = "10px";
                    errorBar.textContent = "Please answer all the questions before submitting.";
                    document.body.appendChild(errorBar);
                    setTimeout(() => {
                        document.body.removeChild(errorBar);
                    }, 3000);
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 style="color: #8B0C0C; text-align: center;">Cek Gangguan Kecemasan</h1>
            <p style="text-align: left;">Dalam 2 minggu terakhir,<br>Seberapa sering kamu merasa terganggu oleh hal berikut...</p>
            <form method="POST" action="{{ route('anxiety.submit') }}">
                @csrf <!-- Tambahkan token CSRF -->
                <div class="question">
                    <label for="question1">Tidak dapat menghentikan atau mengontrol kekhawatiran?</label>
                    <div class="option-card">
                        <input type="radio" id="question1_option1" name="question1" value="0">
                        <label for="question1_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question1_option2" name="question1" value="1">
                        <label for="question1_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question1_option3" name="question1" value="2">
                        <label for="question1_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question1_option4" name="question1" value="3">
                        <label for="question1_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <div class="question">
                    <label for="question2">Terlalu banyak mengkhawatirkan berbagai hal?</label>
                    <div class="option-card">
                        <input type="radio" id="question2_option1" name="question2" value="0">
                        <label for="question2_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question2_option2" name="question2" value="1">
                        <label for="question2_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question2_option3" name="question2" value="2">
                        <label for="question2_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question2_option4" name="question2" value="3">
                        <label for="question2_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <div class="question">
                    <label for="question3">Sulit merasa santai?</label>
                    <div class="option-card">
                        <input type="radio" id="question3_option1" name="question3" value="0">
                        <label for="question3_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question3_option2" name="question3" value="1">
                        <label for="question3_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question3_option3" name="question3" value="2">
                        <label for="question3_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question3_option4" name="question3" value="3">
                        <label for="question3_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <div class="question">
                    <label for="question4">Merasa kurang istirahat hingga sulit untuk diam?</label>
                    <div class="option-card">
                        <input type="radio" id="question4_option1" name="question4" value="0">
                        <label for="question4_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question4_option2" name="question4" value="1">
                        <label for="question4_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question4_option3" name="question4" value="2">
                        <label for="question4_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question4_option4" name="question4" value="3">
                        <label for="question4_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <div class="question">
                    <label for="question5">Mudah kesal atau marah?</label>
                    <div class="option-card">
                        <input type="radio" id="question5_option1" name="question5" value="0">
                        <label for="question5_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question5_option2" name="question5" value="1">
                        <label for="question5_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question5_option3" name="question5" value="2">
                        <label for="question5_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question5_option4" name="question5" value="3">
                        <label for="question5_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <div class="question">
                    <label for="question6">Merasa takut hal buruk akan terjadi?</label>
                    <div class="option-card">
                        <input type="radio" id="question6_option1" name="question6" value="0">
                        <label for="question6_option1">Tidak pernah</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question6_option2" name="question6" value="1">
                        <label for="question6_option2">Beberapa hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question6_option3" name="question6" value="2">
                        <label for="question6_option3">Sebagian besar hari</label>
                    </div>
                    <div class="option-card">
                        <input type="radio" id="question6_option4" name="question6" value="3">
                        <label for="question6_option4">Hampir setiap hari</label>
                    </div>
                </div>
                <!-- Additional questions with similar structure -->
                <button type="submit" style="background-color: #8B0C0C;">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
