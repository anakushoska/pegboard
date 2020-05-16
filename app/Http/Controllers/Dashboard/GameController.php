<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Patient;
use App\Game;
use App\Result;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index($id, Request $request)
    {

        $result=new Result;
        $result->patient_id=$id;
        $result->save();
        $request->session()->put("result_id", $result->id);
        $games=Game::all();
        return view('dashboard.games.index')
                    ->with('games',$games);
    }
}
