<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnimeResource;
use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class animesController extends Controller
{

  public function index()
  {
    $animes = Anime::orderBy('score', 'DESC')->get();
    return view('index', [
      'animes' => $animes
    ]);
  }


  public function create()
  {
    return view('animes.register');
  }


  public function store(Request $request)
  {
    $name = $request->input('name');
    $comment = $request->input('comment');
    $image = $request->file('image');
    $score = $request->input('score');

    if ($request->hasFile('image')) {
      $randomize = rand(11111111, 99999999);
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = $randomize . '.' . $extension;
      $request->file('image')->move(public_path('img/animes'), $fileName);
    }else{
      $image = "NULL";
    }

    $anime = new Anime;
    $anime->name = $name;
    $anime->comment = $comment;
    $anime->img = $fileName;
    $anime->score = $score;

    $anime->save();

    return redirect('/');
  }

  public function show($id)
  {
    //
  }


  public function edit($id)
  {
    $anime = Anime::find($id);

    return view('animes.edit', [
      'anime' => $anime
    ]);
  }

  public function update(Request $request, $id)
  {
    $anime = Anime::find($id);

    $name = $request->input('name');
    $comment = $request->input('comment');
    if ($request->hasFile('image')) {
      $randomize = rand(11111111, 99999999);
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = $randomize . '.' . $extension;
      $request->file('image')->move(public_path('img/animes'), $fileName);
      $anime->img = $fileName;
    }
    $score = $request->input('score');

    $anime->name = $name;
    $anime->comment = $comment;
    $anime->score = $score;

    $anime->save();
    return redirect('/');
  }


  public function destroy($id)
  {
    Anime::destroy($id);
    return redirect('/');
  }

  public function getOneAnime(Request $request, $id){
    return new AnimeResource(Anime::find($id));
  }
  public function getAllAnimes(Request $request, $id){
    return AnimeResource::collection(Anime::find($id));
  }
}