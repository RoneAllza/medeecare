<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Kecemasan</title>
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
        }

        .btn-primary:hover {
            background-color: #d64346; /* Warna tombol primer saat hover */
            border-color: #d64346; /* Warna border tombol primer saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">Hasil Tes Kecemasan</div>

                    <div class="card-body">
                        <p>Skor Kamu: <?php echo e($skor_hasil); ?></p>
                        <p>Skor kamu menandakan gangguan kecemasan: <?php echo e($deskripsi_hasil); ?></p>

                        <form method="GET" action="<?php echo e(route('tes-kecemasan.pertanyaan')); ?>">
                            <button type="submit" class="btn btn-primary">Ulangi Tes</button>
                        </form>
                       <!-- <a href="<?php echo e(route('tes-kecemasan.lihat-hasil', ['id' => $hasilTes->id])); ?>" class="btn btn-primary">Lihat Detail Hasil Tes</a> -->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medeecare\medeecare\resources\views/hasil_kecemasan.blade.php ENDPATH**/ ?>