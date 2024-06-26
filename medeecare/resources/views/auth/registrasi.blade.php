@extends('layouts.login.layout')
@section('content')
<style media="screen">
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: white;
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .shape:first-child {
        background: linear-gradient(#1845ad,
                #23a2f6);
        left: -80px;
        top: -80px;
    }

    .shape:last-child {
        background: linear-gradient(to right,
                #ff512f,
                #f09819);
        right: -30px;
        bottom: -80px;
    }

    form {
        height: 500px;
        width: 520px;
        background-color: rgba(255, 255, 255, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 5px solid rgba(255, 255, 255, 0.1);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    .form-row {
        width: 100%;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    ::placeholder {
        color: #e5e5e5;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .wrapper form .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
    }

    .wrapper form .signup-link a {
        color: #16a085;
        text-decoration: none;
    }

    form .signup-link a:hover {
        text-decoration: underline;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
    <a href="{{ route('registrasi') }}"></a>
</div>
<form action="{{ route('regis_proses') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>
        <span style="color: #8B0C0C;">Medeecare</span>
    </h3>
    <br></br>
    <p style="color: #8B0C0C;">Please register!</p>

    <div class="form-row">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name" required>
            @error('name')
            <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
            @error('email')
            <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" pattern="^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$" title="Password must contain at least one letter and one number" required>
            @error('password')
            @if($message == 'The password format is invalid.')
            <small>Password must contain at least one letter and one number.</small>
            @else
            <small>{{ $message }}</small>
            @endif
            @enderror
        </div>
    </div>
    <button style='background-color:#8B0C0C; border-color:#8B0C0C;' type="submit" class="btn btn-primary">Registrasi</button>
</form>
@endsection