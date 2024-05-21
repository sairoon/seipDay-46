@extends('master')
@section('title')
    Full name
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="{{ route('get-fullname') }}" method="post">
                                @csrf
                                <h3 class="text-center fw-bolder">Name Form</h3>
                                <hr>
                                <div class="row">
                                    <label class="mb-2 col-md-3" for="firstName">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="firstName" name="first_name" placeholder="Enter Your First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="lastName">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="lastName" name="last_name" placeholder="Enter Your Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ Session::has('result') ? Session::get('result') : '' }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="">
                                        <input type="submit" class="btn btn-outline-success mt-3 col-md-12 rounded-0" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
