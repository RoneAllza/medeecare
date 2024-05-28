

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Kecemasan</title>
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
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">Tes Kecemasan</div>

                    <div class="card-body">
                        <h5 class="card-title">Generalized Anxiety Disorder-7 (GAD-7)</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-check text-success"></i> Tes singkat dan valid secara ilmiah, digunakan oleh tenaga kesehatan.</li>
                            <li class="list-group-item"><i class="bi bi-check text-success"></i> Terdiri dari 7 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.</li>
                            <li class="list-group-item"><i class="bi bi-check text-success"></i> Skor Anda bersifat rahasia. Ahli kesehatan mental hanya dapat melihat informasi Anda jika Anda membagikannya.</li>
                        </ul>
                        <a href="<?php echo e(route('tes-kecemasan.pertanyaan')); ?>" class="btn btn-primary mt-3">Mulai Tes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medeecare\medeecare\resources\views/tes_kecemasan.blade.php ENDPATH**/ ?>