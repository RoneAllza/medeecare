@extends('layouts.layoutwonavbar')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Login Admin</title>

        <!--Stylesheet-->
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
            .wrapper form .signup-link{
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
            }
            .wrapper form .signup-link a{
            color: #16a085;
            text-decoration: none;
            }
            form .signup-link a:hover{
            text-decoration: underline;
            }
        </style>
    </head>
    <section>

        <body>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
            <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
                <a href="{{ route('registrasi') }}"></a>
            </div>
            <form action="{{ route('registrasi') }}" method="post">
                @csrf
                <h3>
                    <i><span style="color: #8B0C0C;">Medeecare</span></i>
                </h3>
                <br></br>
                <p style="color: #8B0C0C;">Silahkan registrasi</p>

                <div class="form-row">
                    <div class="form-group">
                        <label for="inputUsername">Email</label>
                        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email"
                            required>
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password"
                            placeholder="Password" required>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <button style='background-color:#8B0C0C; border-color:#8B0C0C;' type="submit"
                        class="btn btn-primary">Submit</button>


                    <!-- label for="forgotPass">Forgot password?</label>
                    <input type="text" id="forgotPass">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                </div!-->
                
            </form>
        </body>
    </section>
    </html>
@endsection
