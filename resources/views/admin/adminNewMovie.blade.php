@extends('layouts.adminmaster')
@section('title', 'New Movie')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <form class="md-float-material form-material" action="#" method="POST">
                <div class="auth-box card">
                    <div class="card-block">

                        <div class="col-md-12">
                            <h3 class="text-center heading">New</h3>
                        </div>
                        <div class="form-group form-primary"> <input type="text" class="form-control" name="id_film" value="" placeholder="id film" id="id_Film"> </div>
                        <div class="form-group form-primary"> <input type="email" class="form-control" name="title" value="" placeholder="title" id="title"> </div>
                        <div class="form-group form-primary"> <input type="text" class="form-control" name="gender" value="" placeholder="Gender" id="gender"> </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Type</option>
                            <option value="1">Series</option>
                            <option value="2">Film</option>
                        </select>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea2">Info</label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                        <label for="formFileSm" class="form-label">Image Path</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" />
                        <label for="formFileSm" class="form-label">Film Path</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" />
                        <div class="row">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Years</option>
                                <option value="1">1980</option>
                                <option value="1">1981</option>
                                <option value="1">1982</option>
                                <option value="1">1982</option>
                                <option value="1">1983</option>
                                <option value="1">1984</option>
                            </select>
                            <div class="form-group form-primary"> <input type="number" class="form-control" name="duration" placeholder="duration" value="" id="duration"> </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-secondary btn-md btn-block waves-effect text-center m-b-20"><i class="fa fa-lock"></i> Update </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection