@extends('layouts.body')

@section('content')

<!-- Body Start -->
<div class="container-md text-light" style="margin-top: 250px;">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <!-- Wrapper container -->
            <div class="container py-4">
                <p class="display-2 fw-bold text-center">Contact Us</p>
                <br>
                <!-- Bootstrap 5 starter form -->
                <form id="contactForm">
                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="John Doe" />
                    </div>
                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="johndoe@example.com" />
                    </div>
                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Lorem ipsum dolor sit amet. Et distinctio laboriosam qui vitae voluptatem est maiores dolorem 33 nostrum incidunt rem necessitatibus asperiores ea facere natus. Doloremque temporibus 33 eius commodi qui nisi ullam quo molestiae asperiores et ratione dignissimos id esse doloremque a nisi omnis! " style="height: 10rem;"></textarea>
                    </div>
                    <br>
                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
<!-- Body End -->

@endsection