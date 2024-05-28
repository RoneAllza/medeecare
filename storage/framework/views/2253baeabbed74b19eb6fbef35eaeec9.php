<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Kecemasan</title>
    <!-- Tautan ke file CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan ke file CSS Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Gaya tambahan -->
    <style>
        body {
            background-color: #ffffff; /* Warna latar belakang putih */
            color: #342b32; /* Warna teks */
        }

        .card {
            background-color: #e34c4f; /* Warna latar belakang card */
            color: #ffffff; /* Warna teks card */
        }

        .btn-primary {
            background-color: #db9292; /* Warna tombol primer */
            border-color: #db9292; /* Warna border tombol primer */
        }

        .btn-primary:hover {
            background-color: #d64346; /* Warna tombol primer saat hover */
            border-color: #d64346; /* Warna border tombol primer saat hover */
        }

        .form-check-input:checked {
            background-color: #e34c4f; /* Warna latar belakang input radio yang dipilih */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">Pertanyaan Kecemasan</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('tes-kecemasan.simpan-hasil')); ?>">
                            <?php echo csrf_field(); ?>

                            <!-- Pertanyaan 1 -->
                            <div class="form-group">
                                <label for="pertanyaan1">1. Merasa gugup, cemas, atau gelisah?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1a" value="0">
                                    <label class="form-check-label" for="jawaban1a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1b" value="1">
                                    <label class="form-check-label" for="jawaban1b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1c" value="2">
                                    <label class="form-check-label" for="jawaban1c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1d" value="3">
                                    <label class="form-check-label" for="jawaban1d">Hampir Setiap Hari</label>
                                </div>
                            </div>

                            <!-- Pertanyaan 2 -->
                            <div class="form-group">
                                <label for="pertanyaan2">2. Tidak dapat menghentikan atau mengontrol kekhawatiran?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2a" value="0">
                                    <label class="form-check-label" for="jawaban2a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2b" value="1">
                                    <label class="form-check-label" for="jawaban2b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2c" value="2">
                                    <label class="form-check-label" for="jawaban2c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2d" value="3">
                                    <label class="form-check-label" for="jawaban2d">Hampir Setiap Hari</label>
                                </div>
                            </div>

                            <!-- Pertanyaan 3 -->
                            <div class="form-group">
                                <label for="pertanyaan3">3. Terlalu banyak mengkhawatirkan berbagai hal?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3a" value="0">
                                    <label class="form-check-label" for="jawaban3a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3b" value="1">
                                    <label class="form-check-label" for="jawaban3b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3c" value="2">
                                    <label class="form-check-label" for="jawaban3c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3d" value="3">
                                    <label class="form-check-label" for="jawaban3d">Hampir Setiap Hari</label>
                                </div>
                            </div>

                            <!-- Pertanyaan 4 -->
                            <div class="form-group">
                                <label for="pertanyaan4">4. Merasa gugup, cemas, atau gelisah?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4a" value="0">
                                    <label class="form-check-label" for="jawaban4a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4b" value="1">
                                    <label class="form-check-label" for="jawaban4b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4c" value="2">
                                    <label class="form-check-label" for="jawaban4c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4d" value="3">
                                    <label class="form-check-label" for="jawaban4d">Hampir Setiap Hari</label>
                                </div>
                            </div> 

                            <!-- Pertanyaan 5 -->
                            <div class="form-group">
                                <label for="pertanyaan5">5. Merasa gugup, cemas, atau gelisah?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban5" id="jawaban5a" value="0">
                                    <label class="form-check-label" for="jawaban5a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban5" id="jawaban5b" value="1">
                                    <label class="form-check-label" for="jawaban5b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban5" id="jawaban5c" value="2">
                                    <label class="form-check-label" for="jawaban5c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban5" id="jawaban5d" value="3">
                                    <label class="form-check-label" for="jawaban5d">Hampir Setiap Hari</label>
                                </div>
                            </div>

                            <!-- Pertanyaan 6 -->
                            <div class="form-group">
                                <label for="pertanyaan6">6. Merasa gugup, cemas, atau gelisah?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban6" id="jawaban6a" value="0">
                                    <label class="form-check-label" for="jawaban6a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban6" id="jawaban6b" value="1">
                                    <label class="form-check-label" for="jawaban6b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban6" id="jawaban6c" value="2">
                                    <label class="form-check-label" for="jawaban6c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban6" id="jawaban6d" value="3">
                                    <label class="form-check-label" for="jawaban6d">Hampir Setiap Hari</label>
                                </div>
                            </div> 

                            <!-- Pertanyaan 7 -->
                            <div class="form-group">
                                <label for="pertanyaan7">7. Merasa gugup, cemas, atau gelisah?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban7" id="jawaban7a" value="0">
                                    <label class="form-check-label" for="jawaban7a">Tidak pernah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban7" id="jawaban7b" value="1">
                                    <label class="form-check-label" for="jawaban7b">Beberapa Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban7" id="jawaban7c" value="2">
                                    <label class="form-check-label" for="jawaban7c">Sebagian Besar Hari</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jawaban7" id="jawaban7d" value="3">
                                    <label class="form-check-label" for="jawaban7d">Hampir Setiap Hari</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medeecare\medeecare\resources\views/pertanyaan_kecemasan.blade.php ENDPATH**/ ?>