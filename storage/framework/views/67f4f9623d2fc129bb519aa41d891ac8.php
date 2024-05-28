<?php $__env->startSection('content'); ?>
<!-- Login -->
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <a href="<?php echo e(url('/')); ?>" class="position-absolute top-0 start-0 p-3 text-white" style="z-index: 10;"><i class="fas fa-arrow-left fa-2x"></i></a>
                            <img src="https://images.unsplash.com/photo-1623650430273-dbd48d9986c0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" alt="">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="<?php echo e(route ('login-process')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="<?php echo e(url('assets/img/logo merah.png')); ?>" class="me-3">
                                        <span class="h1 fw-bold mb-0" style="color:#B6252A">medeecare</span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo e(old('password')); ?>" />
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-light btn-block text-light" type="submit" style="background-color: #B6252A;">Login</button>
                                    </div>
                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mt-3 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(session('status')): ?>
<div class="alert alert-danger fixed-top z-3 " id="alertBox" role="alert" style="width: 20%;">
    <p id="alertMessage"></p>
</div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        <?php if(session('status')): ?>
        $('#alertBox').fadeIn().delay(3000).fadeOut();
        $('#alertMessage').text('<?php echo e(session('message')); ?>'); 
        <?php endif; ?>
    });
</script>
<!-- End Login -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medeecare\medeecare\resources\views/auth/login.blade.php ENDPATH**/ ?>