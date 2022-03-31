<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function __construct()
    {
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        // return  $movie;
        return view('/movie_show')->with('movie', $movie);
    }
    public function store()
    {
    }


    
    public function index(Request $request)
    {
        $request->flash();
        $movies = Movie::paginate(12);

        if ($request->bytype != '' || $request->bytype != 0) {
            $movies = Movie::title("%$request->bytitle%")
                ->synopsis("%$request->bysynopsis%")
                ->year("%$request->byyear%")
                ->duration("%$request->byduration%")
                ->type("$request->bytype")
                ->get();
        } else {
        }
        return view('/home')->with('movies', $movies);
    }

    public function addToFavorites(Request $request, $id)
    {
        $movie = Movie::where("id",$id)->first();
        $favoritos = $request->session()->get('favoritos',[]);
        array_push($favoritos,["id"=>$movie->id,"title"=>$movie->title,"year"=>$movie->year,"sypnosis"=>$movie->syspnosis,"duration"=>$movie->duration,"type"=>$movie->type]);
        $request->session()->put('favoritos',$favoritos);

        return redirect(url()->previous());
    }

    public function emptyFavorites(Request $request)
    {
        $request->session()->forget('favoritos');
        return redirect()->route('home');
    }
}
