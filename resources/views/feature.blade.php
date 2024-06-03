@extends('layouts.homepage.layout')

@section('content')

<section id="banner" class="mb-5" style="height: 20vh; width:100%; position:relative;">
    <div class="d-none d-lg-block">
        <img src="{{url('assets/img/banner3.png')}}" class="w-100 h-100" style="position:absolute; object-fit:cover; z-index: -1; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.1)" alt="">
    </div>
    <div class="d-flex justify-content-center container h-100 align-items-center">
        <div class="py-3 px-5 rounded" style="background-color: #B6252A;">
            <h1 class="m-0 text-light">medeecare</h1>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="d-flex flex-row d-grid gap-5 row-cols-1 row-cols-md-5 justify-content-center ">
        @foreach($features as $feature)
        <div class="d-flex flex-column align-items-center">
            <a href="" class="text-decoration-none rounded">
                <div class="card text-center text-dark boder border-0 shadow p-3 bg-body-tertiary" style="width: 16rem;">
                    <img src="/assets/img/{{$feature->photo}}" class="card-img-top" alt="{{$feature->photo}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$feature->name}}</h5>
                        <p class="card-text">{{$feature->desc}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

@endsection