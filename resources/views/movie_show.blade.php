@extends('layouts.master')
@section('title', 'Film BCN')
@section('content')
    <section class="row justify-content-md-center align-items-center">
        <div class="card m-3" style="min-width: auto; max-width: 30%;">
            <img class="card-img-top rounded p-1" src='{{ $movie->image }}' alt="Card image cap">
            <div class="card-body ">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text ">
                    <small>{{ $movie->synopsis }}</small>
                </p>
                <p><small>Duration: {{ $movie->duration }} Year: {{ $movie->year }} </small>

                </p>
                <!-- icono play -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-play"
                    viewBox="0 0 16 16">
                    <path
                        d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                </svg>

                <small>
                    @if ($movie->type == 1)
                        Movie
                    @else
                        Serie
                    @endif
                </small>

                <div class="position-relative">
                    <div class="position-absolute bottom-0 end-0">
                        <!-- Icono de favoritos -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-star   "
                            viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
