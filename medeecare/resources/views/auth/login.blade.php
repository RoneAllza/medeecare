@extends('layouts.login.layout')

@section('content')
<!-- Login -->
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <a href="{{ url('/') }}" class="position-absolute top-0 start-0 p-3 text-white" style="z-index: 10;"><i class="fas fa-arrow-left fa-2x"></i></a>
                            <img src="https://images.unsplash.com/photo-1623650430273-dbd48d9986c0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" alt="">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="{{route ('login-process')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="{{url('assets/img/logo merah.png')}}" class="me-3">
                                        <span class="h1 fw-bold mb-0" style="color:#B6252A">medeecare</span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" value="{{old('password')}}" />
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-light btn-block text-light" type="submit" style="background-color: #B6252A;">Login</button>
                                    </div>
                                    <p class="mt-3 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/registrasi" style="color: #393f81;">Register here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(session('status'))
<div class="alert alert-danger fixed-top z-3 " id="alertBox" role="alert" style="width: 20%;">
    <p id="alertMessage"></p>
</div>
@endif

<script>
    $(document).ready(function() {
        @if(session('status'))
        $('#alertBox').fadeIn().delay(3000).fadeOut();
        $('#alertMessage').text('{{ session('message') }}'); 
        @endif
    });
</script>
<!-- End Login -->
@endsection('content')
