<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tes Kecemasan</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">Detail Tes Kecemasan</div>
                    <div class="card-body">
                        <h5>Jawaban Kamu</h5>
                        <ul>
                            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pertanyaanText): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($opsiJawaban[$key])): ?>
                                    <?php
                                        $opsiJawabanText = $opsiJawaban[$key]['jawaban_kecemasan'] ?? 'Tidak ada jawaban';
                                    ?>
                                    <li><?php echo e($pertanyaanText); ?></li>
                                    <ul>
                                        <li>Jawaban: <?php echo e($opsiJawabanText); ?></li>
                                        <li>Skor: <?php echo e($jawaban[$key] ?? 'Tidak ada skor'); ?></li>
                                    </ul>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medeecare\medeecare\resources\views/lihat_hasil_kecemasan.blade.php ENDPATH**/ ?>