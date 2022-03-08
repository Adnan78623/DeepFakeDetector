@extends('layouts.body')

@section('content')

<!-- Body Start -->
<div class="container-md text-light" style="margin-top: 250px;">
    <div class="row">
        <div class="col"></div>
        <div class="col-8 text-center">
            <br><br>
            <p class="h1 fw-bold">Scan and Check Your Video Here!</p>
            <br>
            <p class="h5">You can either place a video link. Or upload your video for testing.</p>
            <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Place Video link or Upload Video File">
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary">Upload File</button>
                </div>
            </div>
            <br><br><br>
            <a href="{{ route('scanner') }}" class="btn btn-danger btn-lg " style="padding-left: 7%; padding-right: 7%; padding-top: 1%;">
                <p class="h2">SCAN</p>
            </a>
        </div>
        <div class="col"></div>
    </div>
</div>
<!-- Body End -->

@endsection