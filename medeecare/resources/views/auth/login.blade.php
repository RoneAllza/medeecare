@extends('layouts.login.layout')

<!-- Login -->
<section class="">
    
</section>
<<<<<<< Updated upstream
<!-- End Login -->
=======

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
>>>>>>> Stashed changes
