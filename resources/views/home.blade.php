@extends('layouts.body')

@section('content')

<!-- Body Start -->
<div class="container-md text-light" style="margin-top: 250px;">
    <div class="row">
        <div class="col text-center">
            <p class="display-4 fw-bold">Now You can <br> Detect Deep Fake Videos</p>
            <br><br>
            <p class="h4">Scan a video of your choosing.<br>To see if it computer generated or real.</p>
            <br><br>
            <a href="{{ route('scanner') }}" class="btn btn-danger btn-lg " style="padding-left: 5%; padding-right: 5%; padding-top: 1%;">
                <p class="h1">Go to Scanner</p>
            </a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-xl-6">
            <img src="{{asset('assets/gifs/obama-deepfake-max-amini.webp')}}" class="rounded img-fluid" alt="Obama Deep Fake.">
            <br><br><br><br>
        </div>
        <div class="col"></div>
        <div class="col-xl-5">
            <br>
            <p class="h1">A New World Order</p>
            <br>
            <p class="h5">Deepfakes can be used to put words into the mouth of any person.
                Make them say or do any thing. Incite Violence in the world. <br><br> It is the most
                powerful cyber
                weapon ever created.
                Because it can incite the masses and topple empires.
            </p>
        </div>
    </div>
</div>
<!-- Body End -->

@endsection