@extends('layouts.adminmaster')
@section('title', 'Movie List')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="#" method="POST">
                        <div
                            class="auth-box /home/users/inf/hiaw1/iaw47714462/Documents/m7/streaming/resources/views/formDataUser.htmlblock">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center heading">Film List</h1>
                                </div>
                            </div>
                            <table class="table table-hover table-sm" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" class="text-center">Tittle</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col" class="text-center">Info</th>
                                        <th scope="col"class="">Type</th>
                                        <th scope="col">Year</th>
                                        <th scope="col" class="">Path Picture</th>
                                        <th scope="col" class="">Path File</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies as $movie)
                                        <tr>
                                            <th scope="row">{{ $movie->movie_id }}</th>
                                            <td>{{ $movie->movie_title }}</td>
                                            <td>{{ $movie->movie_duration }} min</td>
                                            <td>{{ $movie->movie_synopsis }}</td>

                                            @if ($movie->movie_type == 0)
                                                <td>Serie</td>
                                            @else
                                                <td>Movie</td>

                                            @endif
                                            <td>{{ $movie->movie_year }}</td>
                                            <td>{{ $movie->movie_image }}</td>
                                            <td>{{ $movie->movie_file }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12 text-center">

                                    <button type="button" class="btn btn-secondary"><i class="fa fa-lock"></i> New
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
