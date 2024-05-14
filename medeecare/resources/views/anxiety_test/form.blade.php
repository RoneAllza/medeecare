<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cek Gangguan Kecemasan</title>
</head>
<body>
    <h1>Form Cek Gangguan Kecemasan</h1>
    <form method="POST" action="{{ route('anxiety.submit') }}">
        @csrf
        <label for="question1">Pertanyaan 1:</label>
        <input type="radio" id="question1_option1" name="question1" value="option1">
        <label for="question1_option1">Sangat Jarang</label>
        <input type="radio" id="question1_option2" name="question1" value="option2">
        <label for="question1_option2">Jarang</label>
        <input type="radio" id="question1_option3" name="question1" value="option3">
        <label for="question1_option3">Kadang-Kadang</label>
        <input type="radio" id="question1_option4" name="question1" value="option4">
        <label for="question1_option4">Sering</label>
        <input type="radio" id="question1_option5" name="question1" value="option5">
        <label for="question1_option5">Sangat Sering</label><br><br>

        <label for="question2">Pertanyaan 2:</label>
        <input type="radio" id="question2_option1" name="question2" value="option1">
        <label for="question2_option1">Sangat Jarang</label>
        <input type="radio" id="question2_option2" name="question2" value="option2">
        <label for="question2_option2">Jarang</label>
        <input type="radio" id="question2_option3" name="question2" value="option3">
        <label for="question2_option3">Kadang-Kadang</label>
        <input type="radio" id="question2_option4" name="question2" value="option4">
        <label for="question2_option4">Sering</label>
        <input type="radio" id="question2_option5" name="question2" value="option5">
        <label for="question2_option5">Sangat Sering</label><br><br>

        <!-- Tambahkan pertanyaan-pertanyaan untuk tes disini -->

        <button type="submit">Submit</button>
    </form>
</body>
</html>
