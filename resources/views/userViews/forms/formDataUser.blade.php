@extends('layouts.master')
@section('title', 'User Data')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="#" method="POST">
                        <div
                            class="auth-box /home/users/inf/hiaw1/iaw47714462/Documents/m7/streaming/resources/views/formDataUser.htmlblock">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center heading">User Data</h3>
                                </div>
                            </div>

                            <div class="form-group form-primary"> <input type="text" class="form-control" name="user_id"
                                    value="" placeholder="User Id" id="user_Id"> </div>
                            <div class="form-group form-primary"> <input type="email" class="form-control" name="email"
                                    value="" placeholder="Email" id="email"> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control"
                                    name="first_name" value="" placeholder="Name" id="first_name"> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="last_name"
                                    value="" placeholder="Last Name" id="last_Name"> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control"
                                    name="card_number" placeholder="Card number" value="" id="card_Number"> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="full_Name"
                                    value="" placeholder="Name" id="full_Name"> </div>
                            <div class="form-group form-primary"> <input type="date" class="form-control"
                                    name="data_Expired" value="" placeholder="Data Expired" id="data_expired"> </div>
                            <div class="form-group form-primary"> <input type="number" class="form-control" name="cvc"
                                    placeholder="CVC" value="" id="cvc"> </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="mt-5">
                                        <div class="mx-auto" style="width: 200px;">

                                            <button type="button"
                                                class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i
                                                    class="fa fa-lock"></i> Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
