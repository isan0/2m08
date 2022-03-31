@extends('layouts.master')
@section('title', 'Film BCN')
@section('content')
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Numero de produtos: {{sizeof(app('request')->session()->get('favoritos',[]))}}</a>
    <ul class="dropdown-menu" aria-labelledby="dropdown01">
        @forelse (app('request')->session()->get('favoritos',[]) as $movie)
        <li>
            <a class="dropdown-item" href="#">{{$movie}}</a>
        </li>
        @empty
        <li>
            <a class="dropdown-item" href="#">No movies in favorites </a>
        </li>
        @endforelse
    </ul>
    </li>
    @if(app('request')->session()->has('favoritos'))
    <li class="nav-item">
        <a class="nav-link" type="button" class="btn btn-primary" href={{ route('emptyFavorites') }}>Borrar Favoritos</a>
    </li>
    @endif
@endsection
