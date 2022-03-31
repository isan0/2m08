@extends('layouts.master')
@section('title', 'Register')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="{{route('users.store')}}" method="POST">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center heading">Register</h3>
                                    </div>
                                </div>
                                
                                <div class="form-group form-primary"> <input type="text" class="form-control"
                                        name="first_name" value="" placeholder="Name" id="first_name"> </div>
                                <div class="form-group form-primary"> <input type="email" class="form-control"
                                        name="email" value="" placeholder="Email" id="email"> </div>
                                <div class="form-group form-primary"> <input type="text" class="form-control"
                                        name="user_name" value="" placeholder="User" id="user_name"> </div>
                                <div class="form-group form-primary"> <input type="password" class="form-control"
                                        name="password" placeholder="Password" value="" id="password"> </div>
                                <div class="form-group form-primary"> <input type="password" class="form-control"
                                        name="password1" placeholder="Confirm Password" value="" id="password1"> </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
