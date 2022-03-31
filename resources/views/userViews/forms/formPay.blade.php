@extends('layouts.master')
@section('title', 'Payment')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="#" method="POST">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center heading">Pay</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary"> <input type="text" class="form-control"
                                        name="card_Number" value="" placeholder="Card number" id="card_number"> </div>
                                <div class="form-group form-primary"> <input type="text" class="form-control"
                                        name="full_Name" value="" placeholder="Full Name" id="full_name"> </div>
                                <div class="form-group form-primary"> <input type="date" class="form-control"
                                        name="data_Expired" value="" placeholder="Data Expired" id="data_expired">
                                </div>
                                <div class="form-group form-primary">
                                    <input type="number" class="form-control" name="cvc" placeholder="CVC" value=""
                                        id="cvc">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="button"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            <i class="fa fa-lock"></i>
                                            PAY
                                        </button>
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
