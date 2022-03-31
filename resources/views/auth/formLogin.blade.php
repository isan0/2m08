@extends('layouts.master')
@section('title', 'Login')
@section('content')
<section class="login-block ">
    <div class="container-fluid ">
        <div class="row m-2 ">
            <div class="col-sm-5 ">
                <form class="md-float-material form-material" action="#" method="POST">
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="text-center heading">Login</h3>
                                </div>
                            </div>
                            <div class="form-floating m-2 p-1 col-sm-10">
                                <input type="email" class="form-control " id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating m-2 p-1 col-sm-10 ">
                                <input type="password" class="form-control  text-center" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>



                            <div class="row m-2 ">
                                <div class="col-xs-2 col-xs-offset-5">
                                    <div class="checkbox-inline">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="">Remember</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-1">
                                <p class="text-inverse text-center">Forgot your password
                                    <button type="button" class="btn btn-secondary btn-sm  waves-effect text-center"><i
                                            class="fa fa-lock"></i> Log in </button>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection