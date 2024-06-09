@extends('layouts.homepage.layout')

@section('content')

<style>
    .button.btn img {
        transition: transform 0.2s, filter 0.2s;
    }

    .button.btn.selected img {
        transform: scale(1.1);
        filter: drop-shadow(0 0 0.3rem rgba(0, 0, 0, 0.4));
    }

    .button.btn:not(.selected) img {
        filter: grayscale(100%);
    }

    .gender-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .gender-container.selected label {
        font-weight: bold;
    }

    .gender-container label {
        margin-top: 10px;
    }
</style>

<section class="">
    <form action="{{ route('bmi-result') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center py-5 text-light" style="background-color: #B6252A;">
            <h4>Kalkulator BMI</h4>
            <p class="mb-5">Kalkulator BMI digunakan untuk menghitung Indeks Massa Tubuh (IMT) dan mengecek seberapa ideal berat badanmu.</p>
            <div class="d-flex flex-row justify-content-center mb-4 d-grid gap-5">
                <div class="gender-container {{ Auth::user()->gender == 'Laki-laki' ? 'selected' : '' }} mx-2">
                    <button class="button btn {{ Auth::user()->gender == 'Laki-laki' ? 'selected' : '' }}" type="button" data-gender="Laki-laki">
                        <img src="https://cdn-icons-png.freepik.com/512/3135/3135715.png" alt="" style="height: 10vh; width: 10vh; border-radius:50%; object-fit:cover">
                    </button>
                    <label for="">Laki-laki</label>
                </div>
                <div class="gender-container {{ Auth::user()->gender == 'Perempuan' ? 'selected' : '' }} mx-2">
                    <button class="button btn {{ Auth::user()->gender == 'Perempuan' ? 'selected' : '' }}" type="button" data-gender="Perempuan">
                        <img src="https://cdn-icons-png.freepik.com/512/3135/3135789.png" alt="" style="height: 10vh; width: 10vh; border-radius:50%; object-fit:cover">
                    </button>
                    <label for="">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="height: 40vh;">
            <div class="my-5 w-25">
                <input type="hidden" name="gender" id="gender" value="{{ Auth::user()->gender }}">
                <div class="mb-4 d-grid gap-3">
                    <label for="">Tinggi Badan (cm)</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->tb }}" name="tb" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    <label for="">Berat Badan (kg)</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->bb }}" name="bb" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    @if ($errors->has('tb'))
                        <div class="error-message">{{ $errors->first('tb') }}</div>
                    @elseif ($errors->has('bb'))
                        <div class="error-message">{{ $errors->first('bb') }}</div>
                    @endif
                </div>
                <div class="justify-content-center d-flex mt-5">
                    <button type="submit" class="btn btn-danger btn-block w-50 rounded-5">Hitung</button>
                </div>
            </div>
        </div>
    </form>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.button');
        const genderInput = document.getElementById('gender');
        const containers = document.querySelectorAll('.gender-container');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                containers.forEach(container => {
                    container.classList.remove('selected');
                    container.querySelector('.button').classList.remove('selected');
                });
                const container = this.closest('.gender-container');
                container.classList.add('selected');
                this.classList.add('selected');
                genderInput.value = this.getAttribute('data-gender');
            });
        });
    });
</script>

@endsection