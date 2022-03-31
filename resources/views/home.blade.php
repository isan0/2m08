@extends('layouts.master')
@section('title', 'Film BCN')
@section('content')
    <section class="">
        <div class="text-center m-4">
            <p style="text-warning">
            <h1 class="filmBCN-font text-warning"> FILM·BCN </h1>
            </p>
            <form class="form-inline d-flex justify-content-center">
                @csrf
                <i class="fas fa-search" aria-hidden="true"></i>
                <div class="form-group">
                    <select class="form-control-sm md-form mt-0 form-sm md-form auto" name="bytype" onchange="submit()">

                        <option value=0 {{ old('bytype') == '0' ? 'selected' : '' }} selected> All </option>
                        <option value=1 {{ old('bytype') == '1' ? 'selected' : '' }}> Movies </option>
                        <option value=2 {{ old('bytype') == '2' ? 'selected' : '' }}> Series </option>

                    </select>
                </div>
                <input class="form-control form-control-sm ml-4 w-10" name="bytitle" type="search"
                    value="{{ old('bytitle') }}" placeholder="Search by title" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="bysynopsis" type="search"
                    value="{{ old('bysynopsis') }}" placeholder="Search by synopsis" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="byyear" type="number"
                    value="{{ old('byyear') }}" placeholder="Search by year" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="byduration" type="number"
                    value="{{ old('byduration') }}" placeholder="Search by duration" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="bygenere" type="number"
                    value="{{ old('bygenere') }}" placeholder="Search by genere" aria-label="Search">
                <button class="btn btm-outline-success my-2 mysm-0" type="submit">
                    {{-- <!-- icono lupa --> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search m-1  " viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
        </div>
        <div>
            <div class="card-deck mx-auto"> 
                @foreach ($movies as $movie)
                {{ csrf_field() }}
                    <a href="{{ route('movie.show', $movie->id) }}">
                        <div class="card m-3" style="min-width: 17rem; max-width: 17rem;">
                            <img class="card-img-top rounded p-1" src='{{ $movie->image }}' alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text ">
                                    <small>{{ $movie->synopsis }}</small>
                                </p>
                                <p><small>Duration: {{ $movie->duration }} Year: {{ $movie->year }} </small>
                                <p><small>Genere: {{ $movie->genere }} </small>

                                </p>
                                <!-- icono play -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-play" viewBox="0 0 16 16">
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
                                        <!--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                            class="bi bi-star   " viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                        </svg>-->
                                        <a href="{{route('addToFavorites')}}" class="buy-now btn btn-sm btn-primary">Favoritos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            {{--  {{ $movies->links() }}  --}}
    </section>
@endsection
