@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pertanyaan Kecemasan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tes-kecemasan.hasil') }}">
                        @csrf

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
@endsection
