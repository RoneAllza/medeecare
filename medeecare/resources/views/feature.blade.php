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

<section class="container">
    <div class="row justify-content-center">
        @foreach($features as $feature)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card text-center text-dark border-0 shadow p-3 bg-body-tertiary" style="width: 100%;">
                <a href="{{$feature->link}}" class="text-dark">
                    <img src="/assets/img/{{$feature->photo}}" class="card-img-top" alt="{{$feature->photo}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$feature->name}}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection